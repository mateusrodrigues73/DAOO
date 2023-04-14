<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rotas de usuários
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuario/{id}', [UsuarioController::class, 'show']);
Route::get('usuario', [UsuarioController::class,'create']);
Route::post('usuario', [UsuarioController::class,'store']);
Route::get('usuario/{id}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::post('usuario/{id}/update', [UsuarioController::class,'update'])->name('usuario.update');
Route::get('usuario/{id}/delete', [UsuarioController::class,'delete'])->name('usuario.delete');
Route::post('usuario/{id}/remove', [UsuarioController::class,'destroy'])->name('usuario.remove');

// rotas de produtos
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produto/{id}', [ProdutoController::class, 'show']);
Route::get('produto', [ProdutoController::class,'create']);
Route::post('produto', [ProdutoController::class,'store']);
Route::get('produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::post('produto/{id}/update', [ProdutoController::class,'update'])->name('produto.update');
Route::get('produto/{id}/delete', [ProdutoController::class,'delete'])->name('produto.delete');
Route::post('produto/{id}/remove', [ProdutoController::class,'destroy'])->name('produto.remove');

// rotas de fóruns
Route::get('/forums', [ForumController::class, 'index']);
Route::get('/forum/{id}', [ForumController::class, 'show']);
