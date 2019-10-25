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
    Route::get('/admin/universities','Admin\AdminController@universities')->name('admin_universities');
    Route::get('/admin/categories','Admin\AdminController@categories')->name('admin_categories');
    Route::get('/admin/qualification','Admin\AdminController@qualification')->name('admin_qualification');
    Route::get('/admin/specialty','Admin\AdminController@specialty')->name('admin_specialty');


    Route::get('/admin/add/university','Admin\AdminController@add_university')->name('admin_add_university');
    Route::get('/admin/add/specialty','Admin\AdminController@add_specialty')->name('admin_add_specialty');
    Route::get('/admin/add/qualification','Admin\AdminController@add_qualification')->name('admin_add_qualification');


});
