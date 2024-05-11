<?php
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
// Vista de la página llamada home
Route::get('/', function () {
    return view('home');
});
// Vista de la página llamada about
Route::get('/about', function () {
    return view('about');
});
// Cargar rutas de usuarios
Route::group(['prefix' => 'usuarios'], function () {
    require __DIR__.'/usuarios.php';
});

// Cargar rutas de roles
Route::group(['prefix' => 'roles'], function () {
    require __DIR__.'/roles.php';
});
// Carga rutas de trayectos
Route::group(['prefix' => 'trayectos'], function () {
    require __DIR__.'/trayectos.php';
});
// Cargar rutas de objetos
Route::group(['prefix' => 'objetos'], function(){
    require __DIR__.'/objetos.php';
});
// Cargar rutas de contenedores
Route::group(['prefix' => 'contents'], function(){
    require __DIR__.'/contents.php';
});