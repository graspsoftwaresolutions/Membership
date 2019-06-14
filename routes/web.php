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

Route::get('/home', 'HomeController@index')->name('home');

//Company Details 
Route::get('/company','CompanyController@index');
Route::get('/add-company','CompanyController@addCompany');
Route::post('/company_save','CompanyController@save');
Route::get('company-view/{id}','CompanyController@view');
Route::get('company-edit/{id}','CompanyController@edit');
Route::post('company_edit','CompanyController@update');
Route::get('company-delete/{id}','CompanyController@delete');
//Country Details
Route::get('country','CountryController@index');
Route::get('add-country','CountryController@addCountry');
Route::post('country_save','CountryController@save');
Route::get('country-view/{id}','CountryController@view');
Route::get('country-edit/{id}','CountryController@edit');
Route::post('country_edit','CountryController@update');
Route::get('country-delete/{id}','CountryController@delete');
