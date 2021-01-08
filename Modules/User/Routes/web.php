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

Route::prefix('user')->middleware(['auth', 'menuPermission'])->group(function () {
    Route::get('/', 'UserController@index')->name('userIndex');
    Route::get('/create',
        'UserController@create'
    )->name('userCreate');
    Route::post('/create', 'UserController@save')->name('userSave');
});
