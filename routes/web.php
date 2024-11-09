<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Subpage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
 
 
    return inertia::render(component: 'mainpage');
});



Route::inertia('camps','camps');
Route::inertia('experiences','experiences');
Route::inertia('events','events');
Route::inertia('aboutus','aboutus');
Route::inertia('sustainability','sustainability');
Route::inertia('faq','faq');
Route::inertia('gallery','gallery');
Route::inertia('camps-leaf','campsleaf');
Route::inertia('camps-leaf-hail','campsleafhail');
Route::inertia('accommodation','accommodation');
//Route::inertia('group-activities','groupactivities');
Route::inertia('events-private','eventsprivate');
Route::inertia('events-corporate','eventscorporate');
Route::inertia('specialoffer','specialoffer');
Route::inertia('bookingandcontact','bookingandcontact');
Route::inertia('bookanevent','bookanevent');
Route::inertia('thankyou','thankyou');
Route::inertia('contactthankyou','contactthankyou');
Route::inertia('specialofferread','specialofferread');
Route::inertia('opening-offer','openingoffer');
Route::inertia('experiencebooking','experiencebooking');
  

//Route::inertia('test','test');







Route::inertia('camps/ar','camps');
Route::inertia('camps/en','camps');

Route::inertia('experiences/ar','experiences');
Route::inertia('experiences/en','experiences');

Route::inertia('bookanevent/ar','bookanevent');
Route::inertia('bookanevent/en','bookanevent');

Route::inertia('events/ar','events');
Route::inertia('events/en','events');


Route::inertia('aboutus/en','aboutus');
Route::inertia('aboutus/ar','aboutus');


Route::inertia('accommodation/en','accommodation');
Route::inertia('accommodation/ar','accommodation');

Route::inertia('sustainability/en','sustainability');
Route::inertia('sustainability/ar','sustainability');

Route::inertia('faq/en','faq');
Route::inertia('faq/ar','faq');

Route::inertia('gallery/en','gallery');
Route::inertia('gallery/ar','gallery');

Route::inertia('camps-leaf/en','campsleaf');
Route::inertia('camps-leaf/ar','campsleaf');

Route::inertia('camps-leaf-hail/en','campsleafhail');
Route::inertia('camps-leaf-hail/ar','campsleafhail');

Route::inertia('accommodation/en','accommodation');
Route::inertia('accommodation/ar','accommodation');


//Route::inertia('group-activities','groupactivities');
Route::inertia('events-private/en','eventsprivate');
Route::inertia('events-private/ar','eventsprivate');

Route::inertia('events-corporate/en','eventscorporate');
Route::inertia('events-corporate/ar','eventscorporate');

Route::inertia('specialoffer/en','specialoffer');
Route::inertia('specialoffer/ar','specialoffer');

Route::inertia('specialofferread/en','specialoffer');
Route::inertia('specialofferread/ar','specialoffer');

Route::inertia('opening-offer/en','openingoffer');
Route::inertia('opening-offer/ar','openingoffer');

Route::inertia('experiencebooking/en','experiencebooking');
Route::inertia('experiencebooking/ar','experiencebooking');

Route::inertia('/ar','mainpage');
Route::inertia('/en','mainpage');





/*
foreach (Subpage::all() as $Subpagedetail) {
//$pageCompomnet=

$subPage =strtolower(trim( $Subpagedetail->name));
$subPage = str_replace(' ', '', $subPage);

    Route::inertia($Subpagedetail->pageurl,$subPage);

}
*/


Route::any('/home/{locale}', [App\Http\Controllers\PageController::class, 'home'])->name('home');
//Route::any('/test', [App\Http\Controllers\PageController::class, 'test'])->name('test');
Route::any('/langdata', [App\Http\Controllers\PageController::class, 'langdata'])->name('langdata');
Route::any('/footerlink', [App\Http\Controllers\PageController::class, 'footerlink'])->name('footerlink');
Route::any('/subpagejson', [App\Http\Controllers\PageController::class, 'subpagejson'])->name('subpagejson');

Route::any('/subpagelist', [App\Http\Controllers\PageController::class, 'subpagelist'])->name('subpagelist');
Route::post('/sendMail', [App\Http\Controllers\PageController::class, 'sendMail'])->name('sendMail');
Route::post('/sendExperience', [App\Http\Controllers\PageController::class, 'sendExperience'])->name('sendExperience');
Route::post('/sendbookMail', [App\Http\Controllers\PageController::class, 'sendbookMail'])->name('sendbookMail');



//Route::any('camps-leaf/{locale}', [App\Http\Controllers\PageController::class, 'show']);


Route::post('/contactsubmit', [App\Http\Controllers\FormController::class, 'submitForm']);


