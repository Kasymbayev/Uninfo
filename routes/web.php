<?php

//Guest

Route::get('/', 'PageController@index')->name('index');

Route::get('/admin', function (){
    return view('auth.login');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
});

//Account

Route::group(['middleware' => 'auth'], function (){
    Route::get('/account', 'AccountController@index')->name('account');
    Route::get('/logout', function (){
        \Auth::logout();
        return redirect(route('login'));
    })->name('logout');

});

//Admin

Route::group(['middleware' => 'admin'],function () {

    Route::get('/admin','Admin\AdminController@index')->name('admin');

});
