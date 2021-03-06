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
Route::get('/statistic', 'PagesController@statisticPage');

Route::get('/dashboard', 'PagesController@dashboardPage');
Route::get('/admin', 'PagesController@adminPage');

Route::resource('workflows','PostsController');

Route::get('workflows/showpost/{$id}','PostsController@showpost');

// Route::get('/workflows/show','PostsController@show');
// Route::post('/workflows/create', 'PostsController@store');  

