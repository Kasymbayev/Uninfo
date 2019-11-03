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

    Route::get('/university/{id}/{slug}', 'PageController@ShowUniversity')->name('uni.show');

    //Favorites

    Route::get('/user/add/favorite', 'UserFavoriteController@addFavorite')->name('add.favorite');
    Route::post('/user/add/favorite', 'UserFavoriteController@addRequestFavorite');

    //Comparison

    Route::get('/user/add/compare', 'UserComparisonController@addCompare')->name('add.compare');
    Route::post('/user/add/compare', 'UserComparisonController@addRequestCompare');

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

    //Subjects

    Route::get('/admin/uni_subject','UniversitySubjectController@Subjects')->name('admin_subject');
    Route::get('/admin/add/subject','UniversitySubjectController@addSubjects')->name('admin_add_subject');
    Route::post('/admin/add/subject','UniversitySubjectController@addRequestSubjects');

    //Directions

    Route::get('/admin/uni_direction','SpecialtyDirectionController@Directions')->name('admin_direct');
    Route::get('/admin/add/direction','SpecialtyDirectionController@AddDirections')->name('admin_add_direct');
    Route::post('/admin/add/direction','SpecialtyDirectionController@AddRequestDirections');

    //Qualifications

    Route::get('/admin/qualification','UniversityQualificationController@Qualification')->name('admin_qualification');
    Route::get('/admin/add/qualification','UniversityQualificationController@AddQualification')->name('admin_add_qualification');
    Route::post('/admin/add/qualification','UniversityQualificationController@AddRequestQualification');

    //Specialties

    Route::get('/admin/specialty','UniversitySpecialtyController@Specialty')->name('admin_specialty');
    Route::get('/admin/add/specialty','UniversitySpecialtyController@AddSpecialty')->name('admin_add_specialty');
    Route::post('/admin/add/specialty','UniversitySpecialtyController@AddRequestSpecialty');


});

//University Cabinet Routes
