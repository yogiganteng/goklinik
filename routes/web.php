<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', 'HomeController@index');



Route::get('post/{slug}', 'PostController@show');

Route::view('contact', 'contact');
Route::view('about', 'about');
