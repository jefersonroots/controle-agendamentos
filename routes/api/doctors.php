<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::controller(DoctorController::class)->group(function () {

    Route::get('/', [DoctorController::class, 'index']);
    Route::get('/{doctor}', [DoctorController::class, 'get']);
});
