<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('tasks.index');
});

Route::group(['prefix' => 'tasks', 'as' => 'tasks.'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'TaskController@index']);

    Route::get('/new', ['as' => 'create', 'uses' => 'TaskController@create']);
    Route::post('/new', ['as' => 'create', 'uses' => 'TaskController@store']);

    Route::get('/{id}', ['as' => 'edit', 'uses' => 'TaskController@edit']);
    Route::post('/{id}', ['as' => 'update', 'uses' => 'TaskController@update']);

    Route::get('/{id}/delete', ['as' => 'delete', 'uses' => 'TaskController@delete']);
});
