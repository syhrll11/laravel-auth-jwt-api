<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

// Authentication
Route::post('/login', [AuthController::class, 'login']);

// Authors - Public Routes
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);

// Genres - Public Routes
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);

// Authors - Admin Routes
Route::middleware(['auth:api', 'role:admin'])->group(function () {
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::put('/authors/{id}', [AuthorController::class, 'update']);
    Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);
});

// Genres - Admin Routes
Route::middleware(['auth:api', 'role:admin'])->group(function () {
    Route::post('/genres', [GenreController::class, 'store']);
    Route::put('/genres/{id}', [GenreController::class, 'update']);
    Route::delete('/genres/{id}', [GenreController::class, 'destroy']);
});

Route::middleware('auth:api')->get('/me', function (Request $request) {
    return response()->json([
        'authenticated_user' => $request->user(),
    ]);
});