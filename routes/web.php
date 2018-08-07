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

Route::get('/admin', function () {
    return view('admin.pages.dashboard');
});

Route::get('/listofteachers',function(){
    return view('admin.pages.listofteachers');
});

Route::get('user',function(){
    return view('user.pages.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
