<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/indexUs',[UsuariosController::class,'index'])->name('indexUs');
Route::match(['get','post'],'/guardar1',[UsuariosController::class,'guardar']);
Route::get('/editar/{id}',[UsuariosController::class,'editarFormU'])->name('formeditar');
Route::put('/editar/{id}',[UsuariosController::class,'update'])->name('update');
Route::delete('/eliminar/{id}',[UsuariosController::class, 'delete'])->name('delete');
