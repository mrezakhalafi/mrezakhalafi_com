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
    return view('home');
});

Route::post('/contact', 'UserController@contact');
Route::post('/subscription', 'UserController@subscription');

Route::get('/privacy-policy-sahabat-laundry', function () {
    return view('privacy');
});