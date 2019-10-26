<?php

//Guest Routes


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

//Account Routes

Route::group(['middleware' => 'auth'], function (){
    Route::get('/account', 'AccountController@index')->name('account');
    Route::get('/logout', function (){
        \Auth::logout();
        return redirect(route('login'));
    })->name('logout');

});

//Admin Routes

Route::group(['middleware' => 'admin'],function () {

    //GET Requests

    Route::get('/admin','Admin\AdminController@index')->name('admin');

    //Universities

    Route::get('/admin/universities','UniversityController@Universities')->name('admin_universities');
    Route::get('/admin/add/university','UniversityController@addUniversities')->name('admin_add_university');
    Route::post('/admin/add/university','UniversityController@addRequestUniversity');

    //Categories

    Route::get('/admin/categories','UniversityCategoriesController@Categories')->name('admin_categories');
    Route::get('/admin/add/category','UniversityCategoriesController@addCategories')->name('admin_add_category');
    Route::post('/admin/add/category','UniversityCategoriesController@addRequestCategories');

    //Types

    Route::get('/admin/uni_type','UniversityTypeController@Types')->name('admin_type');
    Route::get('/admin/add/type','UniversityTypeController@addTypes')->name('admin_add_type');
    Route::post('/admin/add/type','UniversityTypeController@addRequestTypes');

    //Qualifications

    Route::get('/admin/qualification','Admin\AdminController@qualification')->name('admin_qualification');
    Route::get('/admin/add/qualification','Admin\AdminController@add_qualification')->name('admin_add_qualification');

    //Specialties

    Route::get('/admin/specialty','Admin\AdminController@specialty')->name('admin_specialty');
    Route::get('/admin/add/specialty','Admin\AdminController@add_specialty')->name('admin_add_specialty');


});

//University Cabinet Routes
