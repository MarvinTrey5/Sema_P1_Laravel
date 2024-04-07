<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Vista de la página llamada home
Route::get('/home', function () {
    return view('home');
});