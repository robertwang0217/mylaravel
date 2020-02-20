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
Route::post('analytic/attach/{propertyId}', [
    'as' => 'analytic.attach', 'uses' => 'AnalyticController@attachToProperty',
]);

// Get all analytics for an inputted property
Route::get('property-analytics/{propertyId}', [
    'as' => 'property.analytics', 'uses' => 'AnalyticController@getAnalyticsByPropertyId',
]);

// Get a summary of all property analytics for an inputted suburb/state/country
Route::get('property-analytics-summary/{type}/{value}', [
    'as' => 'property.analytics.summary', 'uses' => 'PropertyAnalyticController@getPropertyAnalyticSummary',
]);