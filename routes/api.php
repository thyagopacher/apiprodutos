<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// List produtos
Route::get('produtos', [ProdutoController::class, 'index']);

// List single produto
Route::get('produto/{id}', [ProdutoController::class, 'show']);

// Create new produto
Route::post('produto', [ProdutoController::class, 'store']);

// Update produto
Route::put('produto/{id}', [ProdutoController::class, 'update']);

// Delete produto
Route::delete('produto/{id}', [ProdutoController::class, 'destroy']);
