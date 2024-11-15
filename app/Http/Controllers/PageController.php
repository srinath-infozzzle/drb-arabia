<?php

namespace App\Http\Controllers;
use App;
use App\Models\Subpage;
use DB;
use App\Models\Jsonlink;
use Illuminate\Support\Facades\Mail;
//use App\Mail\ContactFormMail;
use App\Mail\ContactFormMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Enquiry;
use App\Models\ExperienceBooking;
use App\Models\Eventbooking;



class PageController extends Controller
{
    public function home($locale)
    {
        App::setLocale($locale);
        return view('mainpage');
    }
    public function homedefautl()
    {
        App::setLocale('en');
        return view('mainpage');
    }





    public function test()
    {

        $data1 = 'menueight';                //$this->record->menu;
        $data2 = 'Experiences3'; //$this->record->menunameenglish;

        $path = public_path('..\lang\en\example.json'); // This will create the file in the 'public' directory

        $filedata = file_get_contents($path);
        /*  $filedata = $this->replaceFirstOccurrence($filedata, '<?php', '');
          $filedata = $this->replaceFirstOccurrence($filedata, 'return', '');
          $filedata = $this->replaceFirstOccurrence($filedata, '[', '');
          $filedata = $this->replaceLastOccurrence($filedata, ']', '');
          $filedata = $this->replaceLastOccurrence($filedata, ',', '');
          $filedata = $this->replaceLastOccurrence($filedata, ';', '');
          $filedata = trim($filedata);*/

        $firstarray = json_decode($filedata);


        $i = 0;
        $isKeyFind = false;
        foreach ($firstarray as $key => $val) {
            if ($key == $data1) {
                $firstarray->$key = $data2;
                $isKeyFind = true;
                break;
            }
        }
        if (!$isKeyFind) {
            $firstarray->$data1 = $data2;
        }

        $data3 = json_encode($firstarray);
        file_put_contents($path, $data3);



        /*
                for($i=0;$i<count($firstarray);$i++) {
                    $seconarray = explode("=>", $firstarray[$i]);

                    if (trim($seconarray[0],'"') == $data1) {
                        $firstarray[$i] = $seconarray[0] . '=>' . '"'. $data2.'"';
                        $isKeyFind = true;

                        break;

                    }       
                
                }

                if (!$isKeyFind) {
                   
                    $firstarray[$i]=  '"'. $data1 .'"'. '=>' .'"'. $data2 .'"'; 
                    

                }

                $data3 = '';
                for($i=0;$i<count($firstarray);$i++) {

                    $data3 = $data3 . $firstarray[$i] . ',';
                }

            $data3 = '<?php return [' . trim($data3) . '];';
                file_put_contents($path, $data3);
        */


        /*
                $data1 = $this->record->contenname;
                $data2 = $this->record->contenttextenglish;
                $fileName = '';
                if ($this->record->page_id == 1) {
                    $fileName = 'mainpage.php';
                }elseif ($this->record->page_id == 2) {
                    $fileName = 'common.php';
                }elseif ($this->record->page_id == 3) {
                    $fileName = 'camps.php';
                }
                $path = public_path('../lang/en/' . $fileName); // This will create the file in the 'public' directory
                $filedata = file_get_contents($path);
                $firstarray = json_decode($filedata);   
                $i = 0;
                $isKeyFind = false;
                foreach($firstarray as $key => $val ){
                    if($key==$data1)
                    {
                     $firstarray->$key=$data2;
                         $isKeyFind = true;
                         break;
                    }
                 }
                 if (!$isKeyFind) {          
                     $firstarray->$data1 = $data2;
                 }
                $data3=json_encode($firstarray);
                file_put_contents($path, $data3);
                
                
                
                //arabic start
                $data1 = $this->record->contenname;
                $data2 = $this->record->contenttextarabic;

                $path = public_path('../lang/ar/' . $fileName); // This will create the file in the 'public' directory

                $filedata = file_get_contents($path);
                $filedata = $this->replaceFirstOccurrence($filedata, '<?php', '');
                $filedata = $this->replaceFirstOccurrence($filedata, 'return', '');
                $filedata = $this->replaceFirstOccurrence($filedata, '[', '');
                $filedata = $this->replaceLastOccurrence($filedata, ']', '');
                $filedata = $this->replaceLastOccurrence($filedata, ',', '');
                $filedata = $this->replaceLastOccurrence($filedata, ';', '');
                $filedata = trim($filedata);

                $firstarray = (explode(",", $filedata));
                $seconarray = array();
                $i = 0;
                $isKeyFind = false;
                for ($i = 0; $i < count($firstarray); $i++) {
                    $seconarray = explode("=>", $firstarray[$i]);

                    if (trim($seconarray[0], '"') == $data1) {
                        $firstarray[$i] = $seconarray[0] . '=>' . '"' . $data2 . '"';
                        $isKeyFind = true;
                        break;
                    }
                }
                if (!$isKeyFind) {
                    $firstarray[$i] = '"' . $data1 . '"' . '=>' . '"' . $data2 . '"';
                }

                $data3 = '';
                for ($i = 0; $i < count($firstarray); $i++) {
                    $data3 = $data3 . $firstarray[$i] . ',';
                }
                $data3 = '<?php return [' . trim($data3) . '];';
                file_put_contents($path, $data3);

        */




    }
    public function replaceLastOccurrence($haystack, $needle, $replacement)
    {
        // Find the position of the last occurrence of $needle
        $position = strrpos($haystack, $needle);

        if ($position === false) {
            // If $needle is not found, return the original string
            return $haystack;
        }

        // Replace the last occurrence
        return substr_replace($haystack, $replacement, $position, strlen($needle));
    }

    public function replaceFirstOccurrence($haystack, $needle, $replacement)
    {
        // Find the position of the first occurrence of $needle
        $position = strpos($haystack, $needle);

        if ($position === false) {
            // If $needle is not found, return the original string
            return $haystack;
        }

        // Replace the first occurrence
        return substr_replace($haystack, $replacement, $position, strlen($needle));
    }

    public function langdata()
    {
        // Find the position of the first occurrence of $needle
        $menusrs = DB::table('frontmenus')->select('menu', 'menunameenglish', 'menunamearabic')->get();

        $menuen = array();
        $menuar = array();
        foreach ($menusrs as $menu) {
            $menuen[$menu->menu] = $menu->menunameenglish;
            $menuar[$menu->menu] = $menu->menunamearabic;
        }
        $commonrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '2')->get();
        $commonen = array();
        $commonar = array();

        foreach ($commonrs as $common) {
            $commonen[$common->contenname] = $common->contenttextenglish;
            $commonar[$common->contenname] = $common->contenttextarabic;
        }

        $mainpagers = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '1')->get();
        $mainpageen = array();
        $mainpagear = array();

        foreach ($mainpagers as $mainpage) {
            $mainpageen[$mainpage->contenname] = $mainpage->contenttextenglish;
            $mainpagear[$mainpage->contenname] = $mainpage->contenttextarabic;
        }

        $campsrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '3')->get();
        $campsen = array();
        $campsar = array();

        foreach ($campsrs as $camps) {
            $campsen[$camps->contenname] = $camps->contenttextenglish;
            $campsar[$camps->contenname] = $camps->contenttextarabic;
        }

        $eventsrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '5')->get();
        $eventen = array();
        $eventar = array();

        foreach ($eventsrs as $events) {
            $eventen[$events->contenname] = $events->contenttextenglish;
            $eventar[$events->contenname] = $events->contenttextarabic;
        }



        $groupactivitiesrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '11')->get();
        $groupactivitiesen = array();
        $groupactivitiesar = array();
        
        foreach ($groupactivitiesrs as $groupactivities) {
            $groupactivitiesen[$groupactivities->contenname] = $groupactivities->contenttextenglish;
            $groupactivitiesar[$groupactivities->contenname] = $groupactivities->contenttextarabic;
        }
        

        $leafrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '9')->get();
        $leafen = array();
        $leafar = array();

        foreach ($leafrs as $leaf) {
            $leafen[$leaf->contenname] = $leaf->contenttextenglish;
            $leafar[$leaf->contenname] = $leaf->contenttextarabic;
        }


        $accommodationrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '10')->get();
        $accommodationen = array();
        $accommodationar = array();

        foreach ($accommodationrs as $accommodation) {
            $accommodationen[$accommodation->contenname] = $accommodation->contenttextenglish;
            $accommodationar[$accommodation->contenname] = $accommodation->contenttextarabic;
        }


        $experiencesrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '4')->get();
        $experiencesen = array();
        $experiencesar = array();

        foreach ($experiencesrs as $experiences) {
            $experiencesen[$experiences->contenname] = $experiences->contenttextenglish;
            $experiencesar[$experiences->contenname] = $experiences->contenttextarabic;
        }
       
        $eventsprivaters = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '12')->get();
        $eventsprivateen = array();
        $eventsprivatear = array();

        foreach ($eventsprivaters as $eventsprivate) {
            $eventsprivateen[$eventsprivate->contenname] = $eventsprivate->contenttextenglish;
            $eventsprivatear[$eventsprivate->contenname] = $eventsprivate->contenttextarabic;
        }
       
     
        
     
        $eventscorporaters = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '13')->get();
        $eventscorporateen = array();
        $eventscorporatear = array();

        foreach ($eventscorporaters as $eventscorporate) {
            $eventscorporateen[$eventscorporate->contenname] = $eventscorporate->contenttextenglish;
            $eventscorporatear[$eventscorporate->contenname] = $eventscorporate->contenttextarabic;
        }



        $aboutusrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '6')->get();
        $aboutusen = array();
        $aboutusar = array();

        foreach ($aboutusrs as $aboutus) {
            $aboutusen[$aboutus->contenname] = $aboutus->contenttextenglish;
            $aboutusar[$aboutus->contenname] = $aboutus->contenttextarabic;
        }


        $sustainabilityrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '8')->get();
        $sustainabilityen = array();
        $sustainabilityar = array();

        foreach ($sustainabilityrs as $sustainability) {
            $sustainabilityen[$sustainability->contenname] = $sustainability->contenttextenglish;
            $sustainabilityar[$sustainability->contenname] = $sustainability->contenttextarabic;
        }

        $galleryrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '7')->get();
        $galleryen = array();
        $galleryar = array();

        foreach ($galleryrs as $gallery) {
            $galleryen[$gallery->contenname] = $gallery->contenttextenglish;
            $galleryar[$gallery->contenname] = $gallery->contenttextarabic;
        }

        $offerrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '14')->get();
        $offeren = array();
        $offerar = array();

        foreach ($offerrs as $offer) {
            $offeren[$offer->contenname] = $offer->contenttextenglish;
            $offerar[$offer->contenname] = $offer->contenttextarabic;
        }
        
        $leafhailrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '15')->get();
        $leafhailen = array();
        $leafhailar = array();

        foreach ($leafhailrs as $leafhail) {
            $leafhailen[$leafhail->contenname] = $leafhail->contenttextenglish;
            $leafhailar[$leafhail->contenname] = $leafhail->contenttextarabic;
        }

        $specialofferrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '16')->get();
        $specialofferen = array();
        $specialofferar = array();

        foreach ($specialofferrs as $specialoffer) {
            $specialofferen[$specialofferrs->contenname] = $specialofferrs->contenttextenglish;
            $specialofferar[$specialofferrs->contenname] = $specialofferrs->contenttextarabic;
        }

        $directofferrs = DB::table('pagecontents')->select('contenname', 'contenttextenglish', 'contenttextarabic')->where('page_id', '=', '17')->get();
        $directofferen = array();
        $directofferar = array();

        foreach ($directofferrs as $directoffer) {
            $directofferen[$directofferrs->contenname] = $directofferrs->contenttextenglish;
            $directofferar[$directofferrs->contenname] = $directofferrs->contenttextarabic;
        }

        


        
        $subPagesArrayen=array();
$subPagesArrayar=array();

/*
    $subPagers =   DB::table('subpages')->select('id','name')->where('status', '=', '1')->get();


        foreach ($subPagers as $subPage) {
           
            $templatepageen = array();
            $templatepagear = array();
           


        $templatepagesrs=       DB::table('templatepages')->select('id','contenname','contenttextenglish','contenttextarabic','image','isimage','ismultiple')->where('subpage_id', '=', $subPage->id)->get();
        foreach ($templatepagesrs as $templatepage) {
           
           if($templatepage->isimage==0)
           {
            $templatepageen[$templatepage->contenname] = $templatepage->contenttextenglish;
            $templatepagear[$templatepage->contenname] = $templatepage->contenttextarabic;
           }
           else{
            $templatepageen[$templatepage->contenname] = $templatepage->image;
            $templatepagear[$templatepage->contenname] = $templatepage->image;

           }

           if( $templatepage->ismultiple==1){
            $countvar=0;
            $templatepageformatsrs=       DB::table('templatepageformats')->select('imagekey',
            	'contenkey',	
            	'contenttexten',	
            	'contenttextar',	
            	'sectionimage',	
            	'contendescription',
            	'contendescriptionen',
            	'contendescriptionar')->where('templatepage_id', '=', $templatepage->id)->get();
            		
                foreach ($templatepageformatsrs as $templatepageformats) {
                    $templatepageen[$templatepageformats->contenkey] = $templatepageformats->contenttexten;
                    $templatepageen[$templatepageformats->contendescription] = $templatepageformats->contendescriptionen;
                    $templatepageen[$templatepageformats->imagekey] = $templatepageformats->sectionimage;
        
        
                    $templatepagear[$templatepageformats->contenkey] = $templatepageformats->contenttextar;
                    $templatepagear[$templatepageformats->contendescription] = $templatepageformats->contendescriptionar;
                    $templatepagear[$templatepageformats->imagekey] = $templatepageformats->sectionimage;
                    $countvar=$countvar+1;
        
                }
        
                $templatepageen[$templatepage->contenname.'_count'] = (string) $countvar;
                $templatepagear[$templatepage->contenname.'_count'] = (string) $countvar;


           }


        }


        $subPagekey =strtolower(trim( $subPage->name));
        $subPagekey = str_replace(' ', '', $subPagekey);  
        
        

        
        $subPagesArrayen[$subPagekey] = $templatepageen;
        $subPagesArrayar[$subPagekey] = $templatepagear;


    }
*/
   





        $testimonialrs = DB::table('testmonials')->select('name_key', 'name_en', 'name_ar', 'testmonial_key', 'testmonial_text_en', 'testmonial_text_ar')->where('status', '=', '0')->get();
        $testimonialen = array();
        $testimonialar = array();

        foreach ($testimonialrs as $testimonial) {
            $testimonialen[$testimonial->name_key] = $testimonial->name_en;
            $testimonialen[$testimonial->testmonial_key] = $testimonial->testmonial_text_en;

            $testimonialar[$testimonial->name_key] = $testimonial->name_ar;
            $testimonialar[$testimonial->testmonial_key] = $testimonial->testmonial_text_ar;
        }

        foreach ($testimonialrs as $testimonial) {
            $testimonialen[$testimonial->name_key] = $testimonial->name_en;
            $testimonialen[$testimonial->testmonial_key] = $testimonial->testmonial_text_en;

            $testimonialar[$testimonial->name_key] = $testimonial->name_ar;
            $testimonialar[$testimonial->testmonial_key] = $testimonial->testmonial_text_ar;
        }

        $faqrs = DB::table('faqs')->where('status', '=', '1')->get();
        $faqen = array();
        $faqar = array();

        foreach ($faqrs as $faq) {
            $faqen[$faq->question_key] = $faq->question_en;
            $faqar[$faq->question_key] = $faq->question_ar;


            $faqen[$faq->answer_key] = $faq->answer_en;
            $faqar[$faq->answer_key] = $faq->answer_ar;

        }

       












        $footercolumnrs = DB::table('footercolumns')->select('columnkey', 'column_name_english', 'column_name_arabic')->where('status', '=', '1')->get();
        $footercolumnen = array();
        $footercolumnar = array();

        foreach ($footercolumnrs as $footercolumn) {
            $footercolumnen[$footercolumn->columnkey] = $footercolumn->column_name_english;
            $footercolumnar[$footercolumn->columnkey] = $footercolumn->column_name_arabic;
        }

        $footerlinksrs = DB::table('footerliniks')->select('footertextkey', 'footerlinkkey', 'linktextenglish', 'linktextarabic', 'linkengurl', 'linkaraburl')->where('status', '=', '1')->get();
        $footerlinksen = array();
        $footerlinksar = array();





        foreach ($footerlinksrs as $footerlink) {
            $footerlinksen[$footerlink->footertextkey] = $footerlink->linktextenglish;
            $footerlinksen[$footerlink->footerlinkkey] = $footerlink->linkengurl;


            $footerlinksar[$footerlink->footertextkey] = $footerlink->linktextarabic;
            $footerlinksar[$footerlink->footerlinkkey] = $footerlink->linkaraburl;

        }

     //   $footercolumnen=["column1"=>["name"=>"Camps","linkcount"=>"0"],"column2"=>["name"=>"Experiences","linkcount"=>"0"],"column3"=>["name"=>"Events","linkcount"=>"0"],"column4"=>["name"=>"About us","linkcount"=>"0"],"column5"=>["name"=>"Gallery","linkcount"=>"0"]];
     //   $footercolumnar=["column1"=>["name"=>"Camps","linkcount"=>"0"],"column2"=>["name"=>"Experiences","linkcount"=>"0"],"column3"=>["name"=>"Events","linkcount"=>"0"],"column4"=>["name"=>"About us","linkcount"=>"0"],"column5"=>["name"=>"Gallery","linkcount"=>"0"]];
  $mytemparray=$this->footerlinkPhpArray();
      
        $footercolumnen = $mytemparray['footercolumnen'];
        $footercolumnar =  $mytemparray['footercolumnar'];



        
       

        $footerlinksrs = DB::table('footerliniks')->select('footertextkey', 'footerlinkkey', 'linktextenglish', 'linktextarabic', 'linkengurl', 'linkaraburl')->where('status', '=', '1')->get();
      
        // Replace the first occurrence
        $tempen=[ 'footercolumn'=>  $footercolumnen,         "menu" => $menuen, 'common' => $commonen, 'mainpage' => $mainpageen, 'camps' => $campsen, 'testimonial' => $testimonialen, 'faq'=> $faqen,
        'events'=>$eventen,'groupactivities'=>$groupactivitiesen,'leaf'=>$leafen,'leafhail'=>$leafhailen,'accommodation'=> $accommodationen, 'experiences'=>$experiencesen,'eventsprivate'=> $eventsprivateen,'eventscorporate'=>$eventscorporateen,'aboutus'=>$aboutusen,'sustainability'=>$sustainabilityen,'gallery'=> $galleryen, 'offer'=>$offeren, 'specialoffer'=> $specialofferen, 'directoffer'=> $directofferen];

        $tempen=array_merge($tempen,$subPagesArrayen);
        $arrayen = array('en' =>$tempen );
        //$arrayen=array_merge($arrayen,$subPagesArrayen);

$tempar=[  'footercolumn'=>  $footercolumnar,  "menu" => $menuar, 'common' => $commonar, 'mainpage' => $mainpagear, 'camps' => $campsar, 'testimonial' => $testimonialar, 'faq'=> $faqar,
'events'=>$eventar,'groupactivities'=>$groupactivitiesar,'leaf'=>$leafar,'leafhail'=>$leafhailar,'accommodation'=> $accommodationar,'experiences'=>$experiencesar,'eventsprivate'=> $eventsprivatear,'eventscorporate'=>$eventscorporatear,'aboutus'=>$aboutusar,'sustainability'=>$sustainabilityar,'gallery'=> $galleryar, 'offer'=>$offerar, 'specialoffer'=> $specialofferar, 'directoffer'=> $directofferar];
$tempar=array_merge($tempar,$subPagesArrayar);

      


        $arrayar = array('ar' => $tempar);


        $langArray = array();
        $langArray['en'] = $arrayen['en'];
        $langArray['ar'] = $arrayar['ar'];

        return response()->json($langArray);

    }



    public function footerlink()
    {




        $footercolumnrs = DB::table('footercolumns')->select('id', 'columnkey', 'column_name_english', 'column_name_arabic')->where('status', '=', '1')->get();


        $i = 1;

        $jsonStringen = '';
        $jsonStringar = '';
        $jsonStringen = $jsonStringen . '{';
        $jsonStringar = $jsonStringar . '{';
        foreach ($footercolumnrs as $footercolumn) {



            $jsonStringen = $jsonStringen . '"' . "column$i" . '" : {';
            $jsonStringar = $jsonStringar . '"' . "column$i" . '": {';

            $jsonStringen = $jsonStringen . '"' . $footercolumn->columnkey . '" : "' . $footercolumn->column_name_english . '",';
            $jsonStringar = $jsonStringar . '"' . $footercolumn->columnkey . '" : "' . $footercolumn->column_name_arabic . '",';
            $columnid = (string) $footercolumn->id;
            $footerlinksrs = DB::table('footerliniks')->select('footertextkey', 'footerlinkkey', 'linktextenglish', 'linktextarabic', 'linkengurl', 'linkaraburl')->where('status', '=', '1')->where('footercolumns_id', "=", $columnid)->get();


            //$jsonStringen=$jsonStringen.'"'.'links'.'" :[';
            //  $jsonStringar=$jsonStringar.'"'.'links'.'" :[';

            $j = 0;
            foreach ($footerlinksrs as $footerlink) {

                $jsonStringen = $jsonStringen . '"' . $footerlink->footertextkey . '":"' . $footerlink->linktextenglish . '",';
                $jsonStringar = $jsonStringar . '"' . $footerlink->footertextkey . '":"' . $footerlink->linktextarabic . '",';


                $jsonStringen = $jsonStringen . '"' . $footerlink->footerlinkkey . '":"' . $footerlink->linkengurl . '",';

                $jsonStringar = $jsonStringar . '"' . $footerlink->footerlinkkey . '":"' . $footerlink->linkengurl . '",';
                $j = $j + 1;



            }
            $jsonStringen = $jsonStringen . '"linkcount":"' . $j . '"';
            $jsonStringar = $jsonStringar . '"linkcount":"' . $j . '"';



            $jsonStringen = $jsonStringen . '},';
            $jsonStringar = $jsonStringar . '},';
            $i = $i + 1;


        }
        $jsonStringen = rtrim($jsonStringen, ',');
        $jsonStringar = rtrim($jsonStringar, ',');


        $jsonStringen = $jsonStringen . '}';
        $jsonStringar = $jsonStringar . '}';

        $jsonStringen = '{    "en": {"footercolumn":' . $jsonStringen . '}}';
        $jsonStringar = '{    "ar": {"footercolumn":' . $jsonStringar . '}}';


        /*

        {
            "column1": {
              "name": "Column 1",
              "linkcount":4,
              "item1": "Item 1 Description",
              "item2": "Item 2 Description",
              "item3": "Item 3 Description",
              "item4": "Item 4 Description"
            },
            "column2": {
              "name": "Column 2",
              "linkcount":4,
              "item1": "Item 1 Detail",
              "item2": "Item 2 Detail",
              "item3": "Item 3 Detail",
              "item4": "Item 4 Detail"
            },
            "column3": {
              "name": "Column 3",
              "linkcount":4,
              "item1": "Item 1 Info",
              "item2": "Item 2 Info",
              "item3": "Item 3 Info",
              "item4": "Item 4 Info"
            },
            "column4": {
              "name": "Column 4",
              "linkcount":4,
              "item1": "Item 1 Note",
              "item2": "Item 2 Note",
              "item3": "Item 3 Note",
              "item4": "Item 4 Note"
            },
            "column5": {
              "name": "Column 5",
              "linkcount":4,
              "item1": "Item 1 Remark",
              "item2": "Item 2 Remark",
              "item3": "Item 3 Remark",
              "item4": "Item 4 Remark"
            }
          }

        */

       


        $langArraystring = "";
        $langArraystring = '[' . $jsonStringen . ' ,' . $jsonStringar . ']';



        return json_decode($langArraystring);


    }

    public function show()
    {

        //Route::inertia('camps-leaf/{test}','campsleaf');

        /*  return Inertia::render('campsleaf', [
              'item' => $item, // Pass the item to the Inertia component
          ]);*/

        //Route::inertia('','gallery');
        //return Inertia::render('mainpage');



    }

    public function subpagelist()
    {
        $subpagers=  Subpage::Select('name','pageurl')->where('status','=','1')->get()->toArray();


        return response()->json($subpagers);

      


    }
   



    public function subpagejson()
    {




        $jsonStringen = '';
        $jsonStringar = '';
        $jsonStringen = $jsonStringen . '{';
        $jsonStringar = $jsonStringar . '{';

        $subpagesrs = DB::table('subpages')->select('id','name')->where('status', '=', '1')->get();
        foreach ($subpagesrs as $subpage) {

//echo $subpage->name;

            $templatepagesrs = DB::table('templatepages')->select('id', 'contenname', 'contenttextenglish', 'contenttextarabic', 'image', 'isimage', 'ismultiple')
                ->where('subpage_id', '=',  $subpage->id)->get();

            foreach ($templatepagesrs as $templatepage) {

                $jsonStringen = $jsonStringen . '"' . $templatepage->contenname . '":"' . $templatepage->contenttextenglish . '",';
                $jsonStringar = $jsonStringar . '"' . $templatepage->contenname . '":"' . $templatepage->contenttextarabic . '",';

                if ($templatepage->ismultiple == 1) {
                    $i = 1;

                    $jsonStringen = $jsonStringen . '"' . "Activities$i" . '" : {';
                    $jsonStringar = $jsonStringar . '"' . "Activities$i" . '": {';
                    $templatepageformatsrs = DB::table('templatepageformats')->where('status', '=', '1')->where('templatepage_id', "=", $templatepage->id)->get();


                    foreach ($templatepageformatsrs as $templatepageformats) {

                        $jsonStringen = $jsonStringen . '"' . $templatepageformats->contenkey . '":"' . $templatepageformats->contenttexten . '",';
                        $jsonStringar = $jsonStringar . '"' . $templatepageformats->contenkey . '":"' . $templatepageformats->contenttextar . '",';
                        $jsonStringar = $jsonStringar . '"' . $templatepageformats->imagekey . '":"' . $templatepageformats->sectionimage . '",';
                        $jsonStringen = $jsonStringen . '"' . $templatepageformats->imagekey . '":"' . $templatepageformats->sectionimage . '",';

                        $jsonStringen = $jsonStringen . '"' . $templatepageformats->contendescription . '":"' . $templatepageformats->contendescriptionen . '",';
                        $jsonStringar = $jsonStringar . '"' . $templatepageformats->contendescription . '":"' . $templatepageformats->contendescriptionar . '",';
                    }
                    
            $jsonStringen = rtrim($jsonStringen, ',');
            $jsonStringar = rtrim($jsonStringar, ',');
   
                    $jsonStringen = $jsonStringen . '},';
                    $jsonStringar = $jsonStringar . '},';
               
                }



            }

            $jsonStringen = rtrim($jsonStringen, ',');
            $jsonStringar = rtrim($jsonStringar, ',');
   
            $jsonStringen = $jsonStringen . '}';
            $jsonStringar = $jsonStringar . '}';

            $jsonStringen = '{    "en": {"'. $subpage->name .'":' . $jsonStringen . '}}';
            $jsonStringar = '{    "ar": {"'. $subpage->name .'":' . $jsonStringar . '}}';

        }

        $langArraystring = "";
        $langArraystring = '[' . $jsonStringen . ' ,' . $jsonStringar . ']';

        echo $langArraystring;

     
    }

    public function footerlinkPhpArray()
    {
        $footercolumnrs = DB::table('footercolumns')->select('id', 'columnkey', 'column_name_english', 'column_name_arabic')->where('status', '=', '1')->get();


        $i = 1;

        $jsonStringen = '';
        $jsonStringar = '';
        $jsonStringen = $jsonStringen . '{';
        $jsonStringar = $jsonStringar . '{';
        foreach ($footercolumnrs as $footercolumn) {



            $jsonStringen = $jsonStringen . '"' . "column$i" . '" : {';
            $jsonStringar = $jsonStringar . '"' . "column$i" . '": {';

            $jsonStringen = $jsonStringen . '"' . $footercolumn->columnkey . '" : "' . $footercolumn->column_name_english . '",';
            $jsonStringar = $jsonStringar . '"' . $footercolumn->columnkey . '" : "' . $footercolumn->column_name_arabic . '",';
            $columnid = (string) $footercolumn->id;
            $footerlinksrs = DB::table('footerliniks')->select('footertextkey', 'footerlinkkey', 'linktextenglish', 'linktextarabic', 'linkengurl', 'linkaraburl')->where('status', '=', '1')->where('footercolumns_id', "=", $columnid)->get();


            //$jsonStringen=$jsonStringen.'"'.'links'.'" :[';
            //  $jsonStringar=$jsonStringar.'"'.'links'.'" :[';

            $j = 0;
            foreach ($footerlinksrs as $footerlink) {

                $jsonStringen = $jsonStringen . '"' . $footerlink->footertextkey . '":"' . $footerlink->linktextenglish . '",';
                $jsonStringar = $jsonStringar . '"' . $footerlink->footertextkey . '":"' . $footerlink->linktextarabic . '",';


                $jsonStringen = $jsonStringen . '"' . $footerlink->footerlinkkey . '":"' . $footerlink->linkengurl . '",';

                $jsonStringar = $jsonStringar . '"' . $footerlink->footerlinkkey . '":"' . $footerlink->linkengurl . '",';
                $j = $j + 1;



            }
            $jsonStringen = $jsonStringen . '"linkcount":"' . $j . '"';
            $jsonStringar = $jsonStringar . '"linkcount":"' . $j . '"';



            $jsonStringen = $jsonStringen . '},';
            $jsonStringar = $jsonStringar . '},';
            $i = $i + 1;


        }
        $jsonStringen = rtrim($jsonStringen, ',');
        $jsonStringar = rtrim($jsonStringar, ',');


        $jsonStringen = $jsonStringen . '}';
        $jsonStringar = $jsonStringar . '}';
//echo  $jsonStringen;
$jsonString = '{"footercolumnen":' . $jsonStringen . ',"footercolumnar":' . $jsonStringar .  '}';
//$jsonStringar = '{"footercolumnar":' . $jsonStringar . '}';




        $array = json_decode($jsonString, true);
return $array;



    

    }



    public function sendMail(Request $request)
    {

        $to = 'sales@drbarabia.com';
        $subject = 'Test Email';
        $message = 'Hello, this is a test email sent using PHP!';
     //   $headers = 'From: sethubalajikavi@gmail.com' . "\r\n" .                   'Reply-To: sethubalajikavi@gmail.com' . "\r\n" .                   'X-Mailer: PHP/' . phpversion();
     $data = $request->only('name', 'phone','email', 'enquiry');

    // print_r($data);

     //$data = ['name'=>"sethu", 'phone'=>'test', 'email'=>'sethubalajikavi@gmail.com', 'enquiry'=>'this is a test email'];
     Enquiry::create($request->all());



     Mail::to('sales@drbarabia.com')->send(new ContactFormMail($data));

                   //$headers='';
                   return response()->json(['message' => 'Inquiry sent successfully!']);
                  // return "email sent";
 

    }

    public function sendExperience(Request $request)
    {

        $to = 'sales@drbarabia.com';
        $subject = 'Test Email';
        $message = 'Hello, this is a test email sent using PHP!';
     //   $headers = 'From: sethubalajikavi@gmail.com' . "\r\n" .                   'Reply-To: sethubalajikavi@gmail.com' . "\r\n" .                   'X-Mailer: PHP/' . phpversion();
     $data = $request->only('name', 'experience', 'phone','email', 'enquiry');

    // print_r($data);

     //$data = ['name'=>"sethu", 'phone'=>'test', 'email'=>'sethubalajikavi@gmail.com', 'enquiry'=>'this is a test email'];
     ExperienceBooking::create($request->all());



     Mail::to('sales@drbarabia.com')->send(new ContactFormMail($data));

                   //$headers='';
                   return response()->json(['message' => 'Inquiry sent successfully!']);
                  // return "email sent";
 

    }

    public function sendbookMail(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'year' => 'required|integer',
                'month' => 'required|integer',
                'day' => 'required|integer',
                'type_event' => 'required|string',
                'estimated_people' => 'required|integer',
                'enquiry' => 'required|string',
            ]);

            $eventbooking = new Eventbooking;

            $eventbooking->name = $request->first_name;
            $eventbooking->lastname = $request->last_name;
            $eventbooking->email = $request->email;
            $eventbooking->bookingdate = $request->year . '-' . $request->month . '-' . $request->day;
            $eventbooking->eventtype = $request->type_event;
            $eventbooking->numberofpeople = $request->estimated_people;
            $eventbooking->enquiry = $request->enquiry;

            $eventbooking->save();

            return response()->json(['message' => 'Inquiry sent successfully!'], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }



}
