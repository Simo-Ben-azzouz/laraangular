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
// Route::get('/', 'App\Http\Controllers\SiteController@index');
// Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);

// Route::get('/', "SiteController@index");
// Route::get('/services', "SiteController@services");
// Route::get('/blog', "SiteController@blog");
// Route::get('/about', "SiteController@about");
// Route::get('/contact', "SiteController@contact");
Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);
Route::get('/services', [App\Http\Controllers\SiteController::class, 'services']);
Route::get('/blog', [App\Http\Controllers\SiteController::class, 'blog']);
Route::get('/blog/{id}', [App\Http\Controllers\SiteController::class, 'show']);
Route::get('/posts/{id}', [App\Http\Controllers\SiteController::class, 'getPostsOfCategory']);
Route::get('/about', [App\Http\Controllers\SiteController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\SiteController::class, 'contact']);
Route::post('/contact', [App\Http\Controllers\SiteController::class, 'storeContact']);
Route::get('/service/{id}', [App\Http\Controllers\SiteController::class, 'service']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
