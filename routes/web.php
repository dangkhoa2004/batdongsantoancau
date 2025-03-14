<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'trangchu'])->name('homepage.index');
Route::get('/trang-chu', [PostController::class, 'trangchu'])->name('homepage.index');
Route::get('/trang-chu/{id}', [PostController::class, 'trangchuShow'])->name('homepage.detail');

Route::get('/quan-ly-bai-dang', [PostController::class, 'index'])->name('posts.index');
Route::get('/quan-ly-bai-dang/tao-moi', [PostController::class, 'create'])->name('posts.create');
Route::post('/quan-ly-bai-dang', [PostController::class, 'store'])->name('posts.store');
Route::get('/quan-ly-bai-dang/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/quan-ly-bai-dang/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/quan-ly-bai-dang/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/quan-ly-bai-dang/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
