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

Route::get('/', 'TaskController@index')->name('tasks.index');

Route::get('/task/create', 'TaskController@create')->name('tasks.create');

Route::post('/task', 'TaskController@store');

Route::get('/task/{task}/edit', 'TaskController@edit')->name('tasks.edit');

Route::patch('/task/{task}', 'TaskController@update');

Route::delete('/task/{task}/delete', 'TaskController@delete');