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
//State Details 
Route::get('state','StateController@index');
Route::get('add-state','StateController@addState');
Route::post('state_save','StateController@save');
Route::get('state-view/{id}','StateController@view');
Route::get('state-edit/{id}','StateController@edit');
Route::post('state_edit','StateController@update');
Route::get('state-delete/{id}','StateController@delete');
//City Details 
Route::get('city','CityController@index');
Route::get('add-city','CityController@addCity');
Route::get('get-state-order-list','CityController@getStateorderList');
Route::post('city_save','CityController@save');
Route::get('city-view/{id}','CityController@view');
Route::get('city-edit/{id}','CityController@edit');
Route::post('city_update','CityController@update');
Route::get('city-delete/{id}','CityController@delete');
//Designation
Route::get('designation','DesignationController@index');
Route::get('add-designation','DesignationController@addDesignation');
Route::post('designation_save','DesignationController@save');
Route::get('designation-view/{id}','DesignationController@view');
Route::get('designation-edit/{id}','DesignationController@edit');
Route::post('update_designation','DesignationController@update');
Route::get('designation-delete/{id}','DesignationController@delete');
//Race 
Route::get('race','RaceController@index');
Route::get('add-race','RaceController@addRace');
Route::post('race_save','RaceController@save');
Route::get('race-view/{id}','RaceController@view');
Route::get('race-edit/{id}','RaceController@edit');
Route::post('race_update','RaceController@update');
Route::get('race-delete/{id}','RaceController@delete');

//Membership 
Route::get('membership_register','MembershipController@index');
Route::post('membership_save','MembershipController@Save');

Route::get('dropdownlist','MembershipController@countries_list');
Route::get('get-state-list','MembershipController@getStateList');
Route::get('get-cities-list','MembershipController@getCitiesList');
