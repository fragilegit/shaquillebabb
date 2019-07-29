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

// Route::get('/', function () {
//     return view('welcome');
// });
// URL::forceSchema('https');
Route::get('/', 'PagesController@index');
Route::get('/projects','PagesController@portfolio');
Route::get('/projects/game','PagesController@site');
Route::get('/happyanniversarybaby', 'PagesController@bigDay');
Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');

Route::resource('projects','ProjectsController');