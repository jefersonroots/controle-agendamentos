<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'login'], function () {
    require __DIR__ . '/api/login.php';
});

Route::group(['prefix' => 'cidades'], function () {
    require __DIR__ . '/api/cities.php';
});

Route::group(['prefix' => 'medicos'], function () {
    require __DIR__ . '/api/doctors.php';
});

Route::middleware('auth:api')->group(function () {
    Route::group(['prefix' => 'medicos'], function () {
        require __DIR__ . '/api/doctors.php';
    });
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
// Route::apiResource('cities', \App\Http\Controllers\CityController::class);
// Route::apiResource('doctors', \App\Http\Controllers\DoctorController::class);
// Route::apiResource('patients', \App\Http\Controllers\PatientController::class);
// Route::apiResource('consultations', \App\Http\Controllers\ConsultationController::class);
