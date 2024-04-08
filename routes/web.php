<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
// Vista de la página llamada home
Route::get('/', function () {
    return view('home');
});