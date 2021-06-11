<?php

use Illuminate\Support\Facades\Route;

Route::name('home.')->group(function () {
    Route::get('/', [\App\Http\Controllers\BenchmarkController::class, 'index'])->name('head');
});

Route::name('admin.')->group(function () {
    Route::get('/admin-panel', [\App\Http\Controllers\AdminController::class, 'index', '__construct'])->name('panel');

    Route::get('/admin-panel/getUser', [\App\Http\Controllers\AdminController::class, 'getUsers', '__construct'])->name('panel_user');

    Route::get('/admin-panel/getUser/updateUser/{id}', [\App\Http\Controllers\AdminController::class, 'setUser', '__construct'])->name('update_user');

    Route::get('/admin-panel/getUser/updateModerator/{id}', [\App\Http\Controllers\AdminController::class, 'setModerator', '__construct'])->name('update_moderator');

    Route::get('/admin-panel/getHardware', [\App\Http\Controllers\AdminController::class, 'getHardware', '__construct'])->name('panel_hardware');

    Route::get('/admin-panel/getHardware/{id}', [\App\Http\Controllers\AdminController::class, 'getResultHardware', '__construct'])->name('get_result_hardware');

    Route::get('/admin-panel/getHardware/approvedResult/{id}', [\App\Http\Controllers\AdminController::class, 'approvedResultHardware', '__construct'])->name('approved_result_hardware');

    Route::get('/admin-panel/getHardware/rejectResult/{id}', [\App\Http\Controllers\AdminController::class, 'rejectResultHardware', '__construct'])->name('reject_result_hardware');

    Route::get('/admin-panel/getBenchmark', [\App\Http\Controllers\AdminController::class, 'getBenchmarks', '__construct'])->name('panel_benchmark');

    Route::get('/admin-panel/getBenchmark/{id}', [\App\Http\Controllers\AdminController::class, 'getResultBenchmark', '__construct'])->name('get_result_benchmark');

    Route::get('/admin-panel/getBenchmark/approvedResult/{id}', [\App\Http\Controllers\AdminController::class, 'approvedResultBenchmark', '__construct'])->name('approved_result_benchmark');

    Route::get('/admin-panel/getBenchmark/rejectResult/{id}', [\App\Http\Controllers\AdminController::class, 'rejectResultBenchmark', '__construct'])->name('reject_result_benchmark');
});

Route::name('moderator.')->group(function () {
    Route::get('/moderator-panel', [\App\Http\Controllers\ModeratorController::class, 'index', '__construct'])->name('panel');

    Route::get('/moderator-panel/getHardware', [\App\Http\Controllers\ModeratorController::class, 'getHardware', '__construct'])->name('panel_hardware');

    Route::get('/moderator-panel/getHardware/{id}', [\App\Http\Controllers\ModeratorController::class, 'getResultHardware', '__construct'])->name('get_result_hardware');

    Route::get('/moderator-panel/getHardware/approvedResult/{id}', [\App\Http\Controllers\ModeratorController::class, 'approvedResultHardware', '__construct'])->name('approved_result_hardware');

    Route::get('/moderator-panel/getHardware/rejectResult/{id}', [\App\Http\Controllers\ModeratorController::class, 'rejectResultHardware', '__construct'])->name('reject_result_hardware');

    Route::get('/moderator-panel/getBenchmark', [\App\Http\Controllers\ModeratorController::class, 'getBenchmarks', '__construct'])->name('panel_benchmark');

    Route::get('/moderator-panel/getBenchmark/{id}', [\App\Http\Controllers\ModeratorController::class, 'getResultBenchmark', '__construct'])->name('get_result_benchmark');

    Route::get('/moderator-panel/getBenchmark/approvedResult/{id}', [\App\Http\Controllers\ModeratorController::class, 'approvedResultBenchmark', '__construct'])->name('approved_result_benchmark');

    Route::get('/moderator-panel/getBenchmark/rejectResult/{id}', [\App\Http\Controllers\ModeratorController::class, 'rejectResultBenchmark', '__construct'])->name('reject_result_benchmark');
});

Route::name('results.')->group(function () {
    Route::get('/CPU', [\App\Http\Controllers\BenchmarkController::class, 'indexCpu'])->name('CPU');

    Route::get('/GPU', [\App\Http\Controllers\BenchmarkController::class, 'indexGpu'])->name('GPU');

    Route::get('/RAM', [\App\Http\Controllers\BenchmarkController::class, 'indexRam'])->name('RAM');

    Route::get('/benchmarks/{indexResult}', [\App\Http\Controllers\BenchmarkController::class, 'indexResult']);
});

Route::name('user.')->group(function () {
    Route::get('/registration', [\App\Http\Controllers\UserController::class, 'registrationAvailability'])->name('registration');

    Route::post('/registration', [\App\Http\Controllers\UserController::class, 'createUser']);

    Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginAvailability'])->name('login');

    Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);

    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profileView'])->middleware('auth')->name('profile');

    Route::get('/user/{indexUser}', [\App\Http\Controllers\UserController::class, 'profileUser'])->middleware('auth')->name('profileView');

    Route::get('/understandBenchmark', [\App\Http\Controllers\RequestHardwareController::class, 'understandBenchmark'])->name('understandBenchmark');

    Route::get('/understandHardware', [\App\Http\Controllers\RequestHardwareController::class, 'understandHardware'])->name('understandHardware');

    Route::post('/requestBenchmark', [\App\Http\Controllers\RequestHardwareController::class, 'requestBenchmark']);

    Route::get('/requestBenchmark', [\App\Http\Controllers\RequestHardwareController::class, 'requestBenchmarkAvailability'])->name('requestBenchmark');

    Route::post('/requestHardware', [\App\Http\Controllers\RequestHardwareController::class, 'requestHardware']);

    Route::get('/requestHardware', [\App\Http\Controllers\RequestHardwareController::class, 'requestHardwareAvailability'])->name('requestHardware');

    Route::post('/updateHardware', [\App\Http\Controllers\RequestHardwareController::class, 'updateHardware']);

    Route::get('/updateHardware', [\App\Http\Controllers\RequestHardwareController::class, 'updateHardwareAvailability'])->name('updateHardware');

    Route::get('/deleteHardware', [\App\Http\Controllers\RequestHardwareController::class, 'deleteHardware'])->name('deleteHardware');
});
