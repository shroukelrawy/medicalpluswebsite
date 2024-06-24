<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
// Route::get("form1",[MyController::class,'info']);

// Route::get('/', function () {
//     return view('test');  
// });

Route::get('/', [FrontPage::class,'home'])->name('home');
Route::get('contact', [FrontPage::class,'contact'])->name('contact');
Route::get('doctors', [FrontPage::class,'doctors'])->name('doctors');
Route::get('blog', [FrontPage::class,'blog'])->name('blog');
Route::get('services', [FrontPage::class,'services'])->name('services');
Route::get('error404', [FrontPage::class,'error404'])->name('error404');


});