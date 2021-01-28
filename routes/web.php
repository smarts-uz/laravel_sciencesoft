<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('front.pages.index');
// });

// Route::get('/contact-us',function() {
//     return view('front.pages.contact-us');
// });
// Route::get('/about/careers',function() {
//     return view('front.pages.about.careers');
// });

// Route::get('/services/software-development',function() {
//     return view('front.pages.services.software-development');
// });

// Route::get('/about/locations',function() {
//     return view('front.pages.about.locations');
// });

Route::get('/', 'App\Http\Controllers\Front\SoftController@index')->name('index');
Route::get('/contact-us', 'App\Http\Controllers\Front\SoftController@contact')->name('contact');

// About 
Route::get('/about/careers', 'App\Http\Controllers\Front\SoftController@careers')->name('careers');
Route::get('/about/locations', 'App\Http\Controllers\Front\SoftController@locations')->name('locations');
//End About


// Services
Route::get('/services/software-development', 'App\Http\Controllers\Front\SoftController@softwaredevelopment')->name('softwaredevelopment');
// end Services