<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::delete('get-blogs/{id}', [\App\Http\Controllers\BlogController::class, 'destroy']);
    Route::patch('get-blogs', [\App\Http\Controllers\BlogController::class, 'update']);
    Route::post('get-blogs', [\App\Http\Controllers\BlogController::class, 'store']);
    Route::get('get-blogs/{id}', [\App\Http\Controllers\BlogController::class, 'show']);
    Route::get('get-blogs', [\App\Http\Controllers\BlogController::class, 'index']);

    Route::delete('get-posts/{id}', [\App\Http\Controllers\PostController::class, 'destroy']);
    Route::patch('get-posts', [\App\Http\Controllers\PostController::class, 'update']);
    Route::post('get-posts', [\App\Http\Controllers\PostController::class, 'store']);
    Route::get('get-posts/{id}', [\App\Http\Controllers\PostController::class, 'show']);
    Route::get('get-posts', [\App\Http\Controllers\PostController::class, 'index']);

    Route::delete('get-likes', [\App\Http\Controllers\LikeController::class, 'index']);
    Route::patch('get-likes', [\App\Http\Controllers\LikeController::class, 'index']);
    Route::post('get-likes', [\App\Http\Controllers\LikeController::class, 'index']);
    Route::get('get-likes/{id}', [\App\Http\Controllers\LikeController::class, 'index']);
    Route::get('get-likes', [\App\Http\Controllers\LikeController::class, 'index']);

    Route::delete('get-comments', [\App\Http\Controllers\CommentController::class, 'index']);
    Route::patch('get-comments', [\App\Http\Controllers\CommentController::class, 'index']);
    Route::post('get-comments', [\App\Http\Controllers\CommentController::class, 'index']);
    Route::get('get-comments/{id}', [\App\Http\Controllers\CommentController::class, 'index']);
    Route::get('get-comments', [\App\Http\Controllers\CommentController::class, 'index']);
});
