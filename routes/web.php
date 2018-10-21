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
Route::get('/tasks','TasksController@index');
Route::get('/tasks/create','TasksController@create');
Route::POST('/tasks/create/{user}','TasksController@addnewtask');
Route::get('/user/add-money','HomeController@addmoney');
Route::post('/user/paysecurely/{user}','HomeController@paysecurely');
Route::get('/tasks/completed','TasksController@completed');
Route::get('/tasks/requests','TasksController@requests');
Route::get('/tasks/performing','TasksController@performing');
Route::get('/tasks/waiting','TasksController@waiting');
Route::get('/tasks/verify/{id}','TasksController@verify');
Route::get('/tasks/accept/{id}','TasksController@accept');
Route::get('/tasks/delete/{id}','TasksController@delete');
Route::get('/tasks/complete/{id}','TasksController@complete');
Route::get('/tasks/dispute/','TasksController@dispute');
Route::get('/tasks/dispute/solve/{id}','TasksController@solve');
Route::get('/tasks/dispute/solve-d/{id}','TasksController@disputed');
Route::get('/ptasks/', 'Ptaskscontroller@index');
Route::get('/ptasks/create', 'Ptaskscontroller@create');