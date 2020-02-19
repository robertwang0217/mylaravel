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

Route::get('property/create', [
    'as' => 'property.create', 'uses' => 'PropertyController@create',
]);

Route::get('analytic/update', [
    'as' => 'analytic.update', 'uses' => 'AnalyticController@update',
]);