<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrayectosController;

Route::get('/IndexT', [TrayectosController::class, 'IndexT'])->name('IndexT');
Route::match(['get', 'post'], '/guardarT', [TrayectosController::class, 'guardar'])->name('FormGuardarT');
Route::get('/editarT/{id}', [TrayectosController::class, 'EditarFOrmT'])->name('formeditarT');
Route::put('/editarT/{id}', [TrayectosController::class, 'update'])->name('updateT');
Route::delete('/eliminarT/{id}', [TrayectosController::class, 'delete'])->name('deleteT');