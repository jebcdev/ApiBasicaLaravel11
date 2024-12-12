<?php

use App\Http\Controllers\Api\_ApiController;
use App\Http\Controllers\Api\BreedController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [_ApiController::class, 'index'])->name('index');

Route::apiResource('/breeds', BreedController::class)->names('breeds');

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */
