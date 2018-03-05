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


Route::get('test', function () {
    return view('test/index');
});

Route::get('workerman', 'WorkerManController@index');
Route::get('gateway', 'WorkerManController@gateway');

Route::get('bind', 'WorkerManController@bind');
Route::get('send', 'WorkerManController@send');


Route::post('store', 'TestController@store');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
