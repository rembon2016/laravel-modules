<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'usr', 'as' => 'usr.'], function () {
    
    Route::middleware(['guest'])->group(function () {
        Route::get('/', [Modules\Usr\Http\Controllers\UsrController::class, 'index'])->name('index');
        Route::post('/authenticate', [Modules\Usr\Http\Controllers\UsrController::class, 'authenticate'])->name('authenticate');
    });

    Route::post('/logout', [Modules\Usr\Http\Controllers\UsrController::class, 'logout'])->middleware(['auth'])->name('logout');
});
