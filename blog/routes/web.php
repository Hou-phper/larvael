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
Route::get('login',function () {
    return view('home.login');
});
Route::get('captcha','captchaController@index');


Route::group(['namespace'=>'Home','prefix'=>'home'],function (){
    Route::group(['prefix'=>'index'],function (){
        Route::get('/','IndexController@index');
    });
});