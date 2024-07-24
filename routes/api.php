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

    Route::delete('get-comments/{id}', [\App\Http\Controllers\CommentController::class, 'destroy']);
    Route::patch('get-comments', [\App\Http\Controllers\CommentController::class, 'update']);
    Route::post('get-comments', [\App\Http\Controllers\CommentController::class, 'store']);
    Route::get('get-comments/{id}', [\App\Http\Controllers\CommentController::class, 'show']);
    Route::get('get-comments', [\App\Http\Controllers\CommentController::class, 'index']);

    Route::post('get-likes', [\App\Http\Controllers\LikeController::class, 'unlike']);
    Route::post('get-likes', [\App\Http\Controllers\LikeController::class, 'like']);
});
