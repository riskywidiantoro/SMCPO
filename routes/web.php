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
Route::get('/Administrator', 'Administrator\DasborController@index')->name('admin.dashboard');

//Routes for Administrator
Route::prefix('Administrator')->group(function () {

    //Route for Administrator Login - Logout
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@loginAdmin')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logoutAdmin')->name('admin.logout');

    //Route for SideBar Administrator
    Route::get('/', 'Administrator\DasborController@index')->name('admin.dashboard');
    Route::get('/territory', 'Administrator\TerritoryController@index')->name('admin.territory');
    Route::get('/district', 'Administrator\DistrictController@index')->name('admin.district');
    Route::get('/outlet', 'Administrator\OutletController@index')->name('admin.outlet');
    Route::get('/outletCPO', 'Administrator\OutletController@indexCPO')->name('admin.outletCPO');
    Route::get('/consumer', 'Administrator\ConsumerController@index')->name('admin.consumer');
    Route::get('/consumerCPO', 'Administrator\ConsumerController@indexCPO')->name('admin.consumerCPO');
    Route::get('/pp', 'Administrator\PPController@index')->name('admin.pp');
    Route::get('/salesperson', 'Administrator\SalesPersonController@index')->name('admin.salesperson');
    Route::get('/karyawan', 'Administrator\KaryawanController@index')->name('admin.karyawan');
    Route::get('/area', 'Administrator\DefaultController@indexArea')->name('admin.area');
    Route::get('/ou', 'Administrator\DefaultController@indexOU')->name('admin.OU');
    Route::get('/channel', 'Administrator\DefaultController@indexChannel')->name('admin.channel');
    Route::get('/subchannel', 'Administrator\DefaultController@indexSubChannel')->name('admin.subchannel');

    //Error Page
    Route::get('/abort-403', function () {
        return view('error.403');
    })->name('unauthorized');
});
