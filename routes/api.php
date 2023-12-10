<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TagController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route Api

Route::get('/sports', [SportController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/tags', [TagController::class, 'index']);

Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/sports/{id}', [SportController::class, 'show']);
Route::get('/tags/{id}', [TagController::class, 'show']);


