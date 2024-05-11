<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenController;

Route::get('/IndexC', [ContenController::class, 'indexC'])->name('IndexC');
Route::match(['get', 'post'], '/guardarC', [ContenController::class, 'guardar'])->name('FormGuardarC');
Route::get('/editarC/{id}', [ContenController::class, 'EditFormC'])->name('formeditarC');
Route::put('/editarC/{id}', [ContenController::class, 'update'])->name('updateC');
Route::delete('/eliminarC/{id}', [ContenController::class, 'delete'])->name('deleteC');