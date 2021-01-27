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

Route::get('home', function () {
    return view('welcome');
});

Route::get('login', 'Auth\LoginController@showLoginForm')
    ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
    ->name('logout');

// 註冊
    Route::get('grade_Low', function () {
        return view('error.grade_Low');
    });

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['login']], function () {
    Route::get('/updata_index', 'UpdataController@index')
    ->name('updata_index');
    Route::post('/updata_data', 'UpdataController@updata');
    Route::post('/updata_del', 'UpdataController@del');
    Route::get('/log', 'HomeController@index')->name('log');
    Route::get('/ban_index', 'HomeController@ban_index')->name('ban_index');
    Route::get('register',
        'Auth\RegisterController@showRegistrationForm')
        ->name('register');

    Route::post('register',
        'Auth\RegisterController@register');

    // 重設密碼
    Route::get('password/reset',
        'Auth\ForgotPasswordController@showLinkRequestForm')
        ->name('password.request');

    Route::post('password/email',
        'Auth\ForgotPasswordController@sendResetLinkEmail')
        ->name('password.email');

    Route::get('password/reset/{token}',
        'Auth\ResetPasswordController@showResetForm')
        ->name('password.reset');

    Route::post('password/reset',
        'Auth\ResetPasswordController@reset')
        ->name('password.reset.update');


});