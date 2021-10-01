<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', 'HomeController@index');





Route::view('contact', 'contact');
Route::view('about', 'about');
