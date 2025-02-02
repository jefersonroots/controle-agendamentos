<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::controller(CityController::class)->group(function () {

    Route::get('/', [CityController::class, 'index']);
    Route::get('/{city}', [CityController::class, 'get']);
});
