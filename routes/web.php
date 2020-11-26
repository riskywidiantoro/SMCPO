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

Route::get('/', function () {
    return view('welcome');
});

//Routes for Administrator
Route::prefix('administrator')->group(function () {

    //Administrator login
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@loginAdmin')->name('admin.login.submit');

    Route::get('/', 'Administrator\DasborController@index')->name('admin.dashboard');

    //Administrator 
    Route::get('/abort-403', function () {
        return view('error.403');
    })->name('unauthorized');

    //logout Administrator
    Route::get('/logout', 'Auth\AdminLoginController@logoutAdmin')->name('admin.logout');
});
