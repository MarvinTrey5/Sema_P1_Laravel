<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjetoController;


Route::get('/IndexO', [ObjetoController::class, 'IndexO'])->name('IndexO');
Route::match(['get', 'post'], '/guardarR', [ObjetoController::class, 'guardar'])->name('FormGuardarO');
Route::get('/editarO/{id}', [ObjetoController::class, 'EditFormO'])->name('formeditarO');
Route::put('/editarO/{id}', [ObjetoController::class, 'update'])->name('updateO');
Route::delete('/eliminarO/{id}', [ObjetoController::class, 'delete'])->name('deleteO');