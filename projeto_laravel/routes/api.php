<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ForumController;
use App\Http\Controllers\Api\ProdutoController;
use App\Http\Controllers\Api\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/produto/{id}', [ProdutoController::class, 'show'])->middleware('ability:admin');
    Route::post('/produto', [ProdutoController::class, 'store'])->middleware('ability:admin');
    Route::put('/produto/{id}', [ProdutoController::class, 'update'])->middleware('ability:admin');
    Route::delete('/produto/{id}', [ProdutoController::class, 'remove'])->middleware('ability:admin');
    Route::apiResource('forums', ForumController::class)->middleware('ability:manager,admin');
    Route::apiResource('usuarios', UsuarioController::class)->middleware('ability:client,admin');
    Route::get('usuarios/{usuario}/produtos', [UsuarioController::class, 'getProdutos'])
        ->middleware('ability:client,admin');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('usuarios', [UsuarioController::class, 'store']);
Route::get('forums', [ForumController::class, 'index']);
Route::get('/produtos', [ProdutoController::class, 'index']);
