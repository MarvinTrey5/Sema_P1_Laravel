<?php
use App\Http\Controllers\UsuariosController;
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

Route::get('/indexUs',[UsuariosController::class,'index'])->name('indexUs');
Route::match(['get','post'],'/guardar',[UsuariosController::class,'guardar']);
Route::get('/editar/{id}',[UsuariosController::class,'editarformU'])->name('formeditar');
Route::put('/editar/{id}',[UsuariosController::class,'update'])->name('update');
Route::delete('/{id}',[UsuariosController::class, 'delete'])->name('delete');