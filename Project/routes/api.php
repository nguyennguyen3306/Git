<?php

use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EducateController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ScheduleController::class)->group(function () {
    Route::get('/schedule', 'index');
    Route::post('/addschedule', 'create');


});

Route::controller(EducateController::class)->group(function () {
    Route::get('/getedu', 'show');
    Route::post('/addedu', 'create');
    // Route::get('/logout', 'logout');
    // Route::post('/deleteUser', 'deleteUser');
});