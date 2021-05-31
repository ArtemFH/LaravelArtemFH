<?php

use Illuminate\Support\Facades\Route;

Route::name('home.')->group(function () {
    Route::get('/', [\App\Http\Controllers\BenchmarkController::class, 'index'])->name('head');
});

Route::name('admin.')->group(function () {
    Route::get('/admin-panel', [\App\Http\Controllers\AdminController::class, 'index', '__construct'])->name('panel');
});

Route::name('results.')->group(function () {
    Route::get('/CPU', [\App\Http\Controllers\BenchmarkController::class, 'indexCpu'])->name('CPU');

    Route::get('/GPU', [\App\Http\Controllers\BenchmarkController::class, 'indexGpu'])->name('GPU');

    Route::get('/RAM', [\App\Http\Controllers\BenchmarkController::class, 'indexRam'])->name('RAM');

    Route::get('/benchmarks/{indexResult}', [\App\Http\Controllers\BenchmarkController::class, 'indexResult']);
});

Route::name('moderator.')->group(function () {
    Route::get('/moderator-panel', [])->name('panel');
});

Route::name('user.')->group(function () {
    Route::get('/registration', [\App\Http\Controllers\UserController::class, 'registrationAvailability'])->name('registration');

    Route::post('/registration', [\App\Http\Controllers\UserController::class, 'createUser']);

    Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginAvailability'])->name('login');

    Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);

    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profileView'])->middleware('auth')->name('profile');

    Route::get('/user/{indexUser}', [\App\Http\Controllers\UserController::class, 'profileUser'])->middleware('auth')->name('profileView');


    Route::post('/requestBenchmark', [\App\Http\Controllers\RequestHardwareController::class, 'requestBenchmark']);

    Route::get('/requestBenchmark', [\App\Http\Controllers\RequestHardwareController::class, 'requestBenchmarkAvailability'])->name('requestBenchmark');

    Route::post('/requestHardware', [\App\Http\Controllers\RequestHardwareController::class, 'requestHardware']);

    Route::get('/requestHardware', [\App\Http\Controllers\RequestHardwareController::class, 'requestHardwareAvailability'])->name('requestHardware');

    Route::post('/updateHardware', [\App\Http\Controllers\RequestHardwareController::class, 'updateHardware']);

    Route::get('/updateHardware', [\App\Http\Controllers\RequestHardwareController::class, 'updateHardwareAvailability'])->name('updateHardware');

    Route::get('/deleteHardware', [\App\Http\Controllers\RequestHardwareController::class, 'deleteHardware'])->name('deleteHardware');
});
