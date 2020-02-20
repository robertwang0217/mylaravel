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

// Add a new property
Route::post('property/create', [
    'as' => 'property.create', 'uses' => 'PropertyController@create',
]);

// Add/Update an analytic to a property
Route::post('analytic/attach/{id}', [
    'as' => 'analytic.attach', 'uses' => 'AnalyticController@attach',
]);