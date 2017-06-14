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

Route::get('test/play', ['uses' => 'TestController@disPlay']);
Route::get('test/index', ['uses' => 'TestController@index']);
Route::get('test/register', ['uses' => 'TestController@create']);

//for Post method
Route::post('test/register', ['uses' => 'TestController@create', 'permission' => 'index']);
Route::resource('test', 'TestController');


