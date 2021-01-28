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

Route::get('/', function () {
    return view('front.index');
});

Route::get('/contact-us',function() {
    return view('front.contact-us');
});
Route::get('/about/careers',function() {
    return view('front.about.careers');
});

Route::get('/services/software-development',function() {
    return view('front.services.software-development');
});

Route::get('/about/locations',function() {
    return view('front.about.locations');
});


