<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');

});
Route::get('/contact', function () {
    return view('contact');
});
