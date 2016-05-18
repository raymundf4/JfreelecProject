<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("create", "testing@create");
Route::post("store", "testing@store");
Route::get("index", "testing@index");
Route::get("show/{id}", "testing@show");
Route::get("edit/{id}", "testing@edit");
Route::get("update/{id}", "testing@update");
Route::get("delete/{id}", "testing@destroy");
