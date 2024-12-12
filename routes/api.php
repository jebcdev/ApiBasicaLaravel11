<?php

use App\Http\Controllers\Api\_ApiController;
use App\Http\Controllers\Api\BreedController;
use App\Http\Controllers\Api\CatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [_ApiController::class, 'index'])->name('index');

Route::apiResource('/breeds', BreedController::class)->names('breeds');

Route::apiResource('/cats',CatController::class)->names('cats');

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */
