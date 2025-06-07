<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::apiResource('authors', AuthorController::class);
Route::apiResource('genres', GenreController::class);
