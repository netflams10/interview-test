<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'Working ', ], \Symfony\Component\HttpFoundation\Response::HTTP_OK);
})->middleware('auth');

