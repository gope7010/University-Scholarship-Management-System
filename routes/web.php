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

Auth::routes();

   Route::get('/home', 'HomeController@index');

  Route::prefix('university')->group(function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/login', 'Auth\UniversityLoginController@showUniversityLoginForm')->name('uni.login');
    Route::post('/login', 'Auth\UniversityLoginController@UniversityLogin')->name('uni.login.submit');

    Route::get('/', 'UniversityController@index')->name('university.dashboard');

    Route::get('/profile/{name}', 'UniversityController@profile')->name('university.profile');
    Route::get('/profile/{name}/edit', 'UniversityController@edit')->name('profile.edit');
    Route::post('/profile/update', 'UniversityController@update')->name('profile.update');


    Route::get('/{name}/offers', 'OfferController@index')->name('offers.index');
    Route::get('/{name}/offers/create','OfferController@create')->name('offers.create');
    Route::post('/{name}/offers/create','OfferController@store')->name('offers.store');

    Route::get('/offers/edit/{id}','OfferController@edit')->name('offers.edit');
    Route::post('/offers/edit/{id}','OfferController@update')->name('offers.update');
    Route::get('/offers/delete/{id}','OfferController@destroy')->name('offers.destroy');

    
    Route::get('/{name}/requested', 'ApplicationController@index')->name('applications');


    Route::get('/{name}/applications/approve/{id}', 'ApplicationController@approve')->name('application.approve');
   
    Route::get('/{name}/applications/reject/{id}', 'ApplicationController@reject')->name('app.reject');

    Route::get('/{name}/rejected', 'ApplicationController@rejects')->name('app.rejects');
    Route::get('/{name}/approved', 'ApplicationController@approved')->name('approved');


     Route::get('/download/{id}', 'ApplicationController@downloadPDF')->name('download');








    Route::get('/search', 'OfferController@search')->name('search');
    Route::get('/{name}/search/action', 'SearchController@action')->name('search.action');


  });
