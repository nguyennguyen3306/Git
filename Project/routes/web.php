<?php

use App\Http\Controllers\CourseCateController;
use App\Http\Controllers\ProcessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EducateController;
use App\Http\Middleware\Checklogin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.login');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::post('/user', 'create');
    Route::post('/user1', 'store');
    Route::get('/logout', 'logout');
    Route::post('/deleteUser', 'deleteUser');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/auth/google',[GoogleController::class,'redirectToGoogle']);
Route::get('/auth/google/call-back',[GoogleController::class,'Callback']);


Route::controller(ScheduleController::class)->group(function () {
    Route::get('/schedule', 'index');
    // Route::post('/users', 'store');
    // Route::get('/logout', 'logout');
    // Route::post('/deleteUser', 'deleteUser');
});
Route::middleware(Checklogin::class)->group(function () {
    Route::controller(UserRoleController::class)->group(function () {
        Route::get('/role', 'index');
        Route::post('/roles', 'create');
        Route::post('/editRole', 'edit');
        Route::post('/deleteRole', 'destroy');
        Route::post('/switchRole', 'switchRole');
    });
});

Route::controller(ProcessController::class)->group(function () {
    Route::get('/process', 'index');
    // Route::post('/users', 'store');
    // Route::get('/logout', 'logout');
    // Route::post('/deleteUser', 'deleteUser');
});
Route::controller(EducateController::class)->group(function () {
    Route::get('/education', 'index');
    Route::post('/addedu', 'create');
    // Route::get('/logout', 'logout');
    // Route::post('/deleteUser', 'deleteUser');
});

Route::controller(CourseCateController::class)->group(function () {
    Route::get('/CourseCate', 'index');
    Route::post('/addCourseCate', 'create');
    Route::post('/editCourseCate', 'edit');
    // Route::get('/logout', 'logout');
    // Route::post('/deleteUser', 'deleteUser');
});

