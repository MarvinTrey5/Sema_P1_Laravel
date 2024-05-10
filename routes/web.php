<?php
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RolesController;
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
Route::match(['get','post'],'/guardar1',[UsuariosController::class,'guardar']);
Route::get('/editar/{id}',[UsuariosController::class,'editarformU'])->name('formeditar');
Route::put('/editar/{id}',[UsuariosController::class,'update'])->name('update');
Route::delete('/{id}',[UsuariosController::class, 'delete'])->name('delete');

Route::get('/indexR', [RolesController::class, 'IndexR'])->name('indexR');
Route::match(['get', 'post'], '/guardar2', [RolesController::class, 'guardar'])->name('guardar');
Route::get('/editar/{id}', [RolesController::class, 'EditarFormR'])->name('formeditarR');
Route::put('/editar/{id}', [RolesController::class, 'update'])->name('updateR');
Route::delete('/{id}', [RolesController::class, 'delete'])->name('deleteR');