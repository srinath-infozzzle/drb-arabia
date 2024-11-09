<?php

namespace App\Filament\Resources\PagecontentResource\Pages;

use App\Filament\Resources\PagecontentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPagecontent extends EditRecord
{
    protected static string $resource = PagecontentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        // Path to the file you want to create
        $data1 = $this->record->contenname;
        $data2 = $this->record->contenttextenglish;
        $fileName = '';
        if ($this->record->page_id == 1) {
            $fileName = 'mainpage.json';
        } elseif ($this->record->page_id == 2) {
            $fileName = 'common.json';
        } elseif ($this->record->page_id == 3) {
            $fileName = 'camps.json';
        } elseif ($this->record->page_id == 4) {
            $fileName = 'experiences.json';
        }
        elseif ($this->record->page_id == 5) {
            $fileName = 'events.json';
        }
        elseif ($this->record->page_id == 6) {
            $fileName = 'aboutus.json';
        }
        elseif ($this->record->page_id == 7) {
            $fileName = 'gallery.json';
        }
        elseif ($this->record->page_id == 8) {
            $fileName = 'sustainability.json';
        }
        elseif ($this->record->page_id == 9) {
            $fileName = 'leaf.json';
        }
        elseif ($this->record->page_id == 10) {
            $fileName = 'accommodation.json';
        }
        elseif ($this->record->page_id == 14) {
            $fileName = 'offer.json';
        }
        elseif ($this->record->page_id == 15) {
            $fileName = 'leaf_hail.json';
        }
        elseif ($this->record->page_id == 16) {
            $fileName = 'specialoffer.json';
        }
        elseif ($this->record->page_id == 17) {
            $fileName = 'direct_offer.json';
        }
        

        // $path = public_path('../lang/en/' . $fileName); // This will create the file in the 'public' directory
        $path = public_path('lang/en/' . $fileName); // This will create the file in the 'public' directory
        $filedata = file_get_contents($path);
        $firstarray = json_decode($filedata);
        $i = 0;
        $isKeyFind = false;

        if (is_null($firstarray)) {
            $firstarray = json_decode("{}");
        }
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

        //arabic start
        $data1 = $this->record->contenname;
        $data2 = $this->record->contenttextarabic;

        // $path = public_path('../lang/ar/' . $fileName); // This will create the file in the 'public' directory
        $path = public_path('lang/ar/' . $fileName);
        $filedata = file_get_contents($path);

        $firstarray = json_decode($filedata);
        $i = 0;
        $isKeyFind = false;
        if (is_null($firstarray)) {
            $firstarray = json_decode("{}");
        }


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

    public function updatephplangfile()
    {
        $data1 = $this->record->contenname;
        $data2 = $this->record->contenttextenglish;
        $fileName = '';
        if ($this->record->page_id == 1) {
            $fileName = 'mainpage.php';
        } elseif ($this->record->page_id == 2) {
            $fileName = 'common.php';
        } elseif ($this->record->page_id == 3) {
            $fileName = 'camps.php';
        } elseif ($this->record->page_id == 4) {
            $fileName = 'experiences.php';
        }




        $path = public_path('../lang/en/' . $fileName); // This will create the file in the 'public' directory

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


    }

















}
