<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;

Route::get('/indexR', [RolesController::class, 'IndexR'])->name('indexR');
Route::match(['get', 'post'], '/guardar2', [RolesController::class, 'guardar'])->name('guardar');
Route::get('/editarR/{id}', [RolesController::class, 'EditarFormR'])->name('formeditarR');
Route::put('/editarR/{id}', [RolesController::class, 'update'])->name('updateR');
Route::delete('/eliminarR/{id}', [RolesController::class, 'delete'])->name('deleteR');