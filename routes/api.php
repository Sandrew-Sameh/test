<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Users\AuthController;
use App\Http\Controllers\API\Users\UserController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/signup', [AuthController::class, 'signup']);

// Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'profile']);
        Route::get('/{id}', [UserController::class, 'UserById']);
    });
// });
