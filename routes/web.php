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

Route::get('admin', function () {
    App::setlocale('fa');
    return view('Administrator.home');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('portfolio', function () {
        return view('Administrator.porfolio');
    });
    Route::get('logo', function () {
        return view('Administrator.logoSetting');
    });
    Route::get('header', function () {
        //Code here
    });
    Route::get('mahan', function () {
        //Code here
    });

});
