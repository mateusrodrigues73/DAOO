<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ForumController;
use App\Http\Controllers\Api\ProdutoController;
use App\Http\Controllers\Api\UsuarioController;
use Illuminate\Http\Request;
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
    Route::get('/produto/{id}', [ProdutoController::class, 'show']);
    Route::post('/produto', [ProdutoController::class, 'store']);
    Route::put('/produto/{id}', [ProdutoController::class, 'update']);
    Route::delete('/produto/{id}', [ProdutoController::class, 'remove']);

    Route::apiResource('forums', ForumController::class);

    Route::apiResource('usuarios', UsuarioController::class);
    Route::get('usuarios/{usuario}/produtos', [UsuarioController::class, 'getProdutos']);
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('usuarios', [UsuarioController::class, 'store']);
Route::get('forums', [ForumController::class, 'index']);
Route::get('/produtos', [ProdutoController::class, 'index']);
