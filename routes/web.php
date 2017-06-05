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
Route::Post('signup',[
    'uses'=>'UserController@PostSignup',
    'as'=>'signup'
]);

Route::Post('signin',[
    'uses'=>'UserController@PostSignIn',
    'as'=>'signin'
]);
Route::get('/dashboard',[
    'uses'=>'UserController@getDashboard',
    'as'=>'dashboard'
]);
Route::get('/signup_confirmation',[
    'uses'=>'UserController@getSignUp_Confirmation',
    'as'=>'signup_confirmation'
]);
Route::get('/logout',[
    'uses' =>'UserController@performlogout',
     'as' =>'logout']);
