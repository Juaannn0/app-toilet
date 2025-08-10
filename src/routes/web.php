<?php

use App\Http\Controllers\BathroomController;

Route::get('/', function () {
    return view('home');
});

Route::prefix('api')->group(function () {
    Route::apiResource('bathrooms', BathroomController::class);
});

Route::get('/', function () {
    return view('home');
});
