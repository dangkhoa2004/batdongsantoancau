<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/trangchu', [PostController::class, 'trangchuJson']);
Route::get('/posts', [PostController::class, 'indexJson']);