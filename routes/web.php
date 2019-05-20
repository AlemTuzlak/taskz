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

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('boards/update', 'BoardController@update')->name('boards.update');
    Route::post('boards/destroy/{board}', 'BoardController@destroy');
    Route::post('boards/store', 'BoardController@store');
    Route::get('board', 'BoardController@index')->name('board');
    Route::post('lists/store', 'BoardListsController@store');
    Route::post('tasks/store', 'TaskController@store');
    Route::post('tasks/checked/{task}', 'TaskController@checked');
    Route::post('tasks/destroy/{task}', 'TaskController@destroy');
    Route::post('tasks/update', 'TaskController@update');
});

Auth::routes();

