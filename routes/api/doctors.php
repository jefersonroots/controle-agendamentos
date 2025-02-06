<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::controller(DoctorController::class)->group(function () {
    Route::get('/', [DoctorController::class, 'index']);
});

Route::middleware('auth:api')->group(function () {
    Route::controller(DoctorController::class)->group(function () {
        Route::get('/{doctor}', [DoctorController::class, 'get']);
        Route::put('/{doctor}', [DoctorController::class, 'update']);
        Route::delete('/{doctor}', [DoctorController::class, 'delete']);
        Route::post('/', [DoctorController::class, 'create']);
    });
});
