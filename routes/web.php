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

Route::group([
    'middleware' => 'roles',
    'roles' => ['Admin', 'Moderator', 'User']
], function() {


    Route::get('pages', [
        'uses' => 'PagesController@index',
        'as' => 'pages.index'
    ]);

    Route::get('pages/create', [
        'uses' => 'PagesController@create',
        'as' => 'pages.create'
    ]);

    Route::post('pages/store', [
        'uses' => 'PagesController@store',
        'as' => 'pages.store'
    ]);

     Route::get('pages/edit/{page}', [
        'uses' => 'PagesController@edit',
        'as' => 'pages.edit'
    ]);

     Route::put('pages/{page}', [
        'uses' => 'PagesController@update',
        'as' => 'pages.update'
    ]);

     Route::delete('pages/{page}', [
        'uses' => 'PagesController@destroy',
        'as' => 'pages.delete'
    ]);


//Route::resource('/pages', 'PagesController');
});


Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

Route::get('/pages/{id}', 'PagesController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');


