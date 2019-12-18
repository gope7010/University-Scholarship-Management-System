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

    Route::get('/login', 'Auth\UniversityLoginController@showLoginForm')->name('uni.login');
    Route::post('/login', 'Auth\UniversityLoginController@login')->name('uni.login.submit');

    Route::get('/', 'UniversityController@index')->name('uni.dashboard');

    Route::get('/profile/{name}', 'UniversityController@profile')->name('university.profile');
    Route::get('/profile/{name}/edit', 'UniversityController@edit')->name('profile.edit');
    Route::post('/profile/update', 'UniversityController@update')->name('profile.update');

    Route::get('/{name}/offers', 'OfferController@index')->name('university.offers');

    Route::get('/{name}/offers/create','OfferController@create')->name('offers.create');
    Route::post('/{name}/offers/create','OfferController@store')->name('offers.store');

    Route::get('/offers/edit/{id}','OfferController@edit')->name('offers.edit');
    Route::get('/offers/delete/{id}','OfferController@destroy')->name('offers.destroy');






  });
