<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KmsDataController;
use App\Http\Controllers\BlogDataController;
use App\Http\Controllers\AccountDataController;
use App\Http\Controllers\ProfileDataController;

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


// Route::get('/kms', 'App\Http\Controllers\KmsController@kms');
// Route::get('/kms/detail', 'App\Http\Controllers\KmsController@kms_detail');
// Route::get('/blog', 'App\Http\Controllers\KmsController@blog');
// Route::get('/blog/detail', 'App\Http\Controllers\KmsController@blog_detail');
// Route::get('/profile', 'App\Http\Controllers\KmsController@profile');
// Route::get('/profile/edit', 'App\Http\Controllers\KmsController@profile_edit');
// Route::get('/account', 'App\Http\Controllers\KmsController@account');
// Route::get('/account/edit', 'App\Http\Controllers\KmsController@account_edit');
// Route::get('/login', 'App\Http\Controllers\KmsController@login');
// Route::get('/register', 'App\Http\Controllers\KmsController@register');

Route::get('/register', 'App\Http\Controllers\RegisterController@index')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\RegisterController@store');

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');
Route::post('/logout', 'App\Http\Controllers\LoginController@logout');

Route::get('/', 'App\Http\Controllers\KmsController@index')->middleware('auth');

Route::resource('/profile', ProfileDataController::class)->middleware('auth');

Route::resource('/account', AccountDataController::class)->middleware('auth');

Route::resource('/kms', KmsDataController::class)->middleware('auth');

Route::resource('/blog', BlogDataController::class);