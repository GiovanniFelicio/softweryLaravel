<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('company')->middleware('auth')->group(function() {
    Route::get('/', 'CompanyController@index')->name('companyIndex');
});

Route::prefix('user')->middleware('auth')->group(function() {
    Route::get('/', 'UserController@index')->name('userIndex');
    Route::get('/create', 'UserController@create')->name('userCreate');
    Route::post('/create', 'UserController@save')->name('userSave');
});
