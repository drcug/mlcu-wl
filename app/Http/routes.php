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

Route::get('/', 'DonationController@index');
Route::post('/donation', 'DonationController@store');
Route::get('/thanks/{uuid}', 'DonationController@thanks');
Route::get('/howto', 'DonationController@howto');
Route::get('/contact', 'DonationController@contact');
