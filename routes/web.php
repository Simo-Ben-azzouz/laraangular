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

Route::get('/', "SiteController@index");
Route::get('/', "SiteController@sevices");
Route::get('/', "SiteController@blog");
Route::get('/', "SiteController@about");
Route::get('/', "SiteController@contact");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
