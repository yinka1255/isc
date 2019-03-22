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

//General Routes
Route::get('/', 'UsersController@index');
Route::get('/about', 'UsersController@about');
Route::get('/contact', 'UsersController@contact');
Route::get('/services', 'UsersController@services');
Route::get('/membership', 'UsersController@membership');
Route::get('/join/economy', 'UsersController@economy');
Route::get('/join/executive', 'UsersController@executive');
Route::get('/join/elite', 'UsersController@elite');
// Route::get('login', function () {
//     return view('login');
// });
Route::get('/login', 'LoginsController@login');
Route::get('/logout', 'LoginsController@logout');
Route::post('/auth', 'LoginsController@auth');


?>