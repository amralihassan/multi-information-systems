<?php

use Illuminate\Support\Facades\Route;

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
Route::redirect('/','/home');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/solutions', 'HomeController@solutions')->name('solutions');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/service', 'HomeController@service')->name('service');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
