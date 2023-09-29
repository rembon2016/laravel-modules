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

Route::group(['prefix' => 'panel/blog', 'as' => 'panel.blog.', 'middleware' => ['auth']], function () {
    Route::get('/', [Modules\Blog\Http\Controllers\BlogController::class, 'index'])->name('index');
    Route::post('/add', [Modules\Blog\Http\Controllers\BlogController::class, 'addBlogPost'])->name('add-post');
});
