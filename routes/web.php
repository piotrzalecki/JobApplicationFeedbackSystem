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

Route::get('/admin', 'AdminController@index')->name('adminHome');

Route::resource('/admin/positions', 'PositionsController');
Route::resource('/admin/addresses', 'AddressesController');
Route::resource('/admin/companies', 'CompaniesController');
Route::resource('/admin/questionnaires', 'QuestionnairesController');
Route::resource('admin/applications', 'ApplicationsController');
Route::resource('admin/feedbacks', 'FeedbacksController');
Route::resource('feedback', 'AnswersController');

//Route::get('/feedback/{token}',function($token){
//
//    return
//
//});
