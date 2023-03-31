<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// users routes
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuario/{id}', [UsuarioController::class, 'show']);
Route::get('usuario', [UsuarioController::class,'create']);
Route::post('usuario', [UsuarioController::class,'store']);
Route::get('usuario/{id}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::post('usuario/{id}/update', [UsuarioController::class,'update'])->name('usuario.update');
Route::get('usuario/{id}/delete', [UsuarioController::class,'delete'])->name('usuario.delete');
Route::post('usuario/{id}/remove', [UsuarioController::class,'destroy'])->name('usuario.remove');

// products routes
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produto/{id}', [ProdutoController::class, 'show']);

// forums routes
Route::get('/forums', [ForumController::class, 'index']);
Route::get('/forum/{id}', [ForumController::class, 'show']);
