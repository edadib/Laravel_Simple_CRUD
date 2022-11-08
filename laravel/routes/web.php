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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::get('/marital', 'App\Http\Controllers\MaritalController@index')->name('marital.index');
    Route::get('/staff', 'App\Http\Controllers\StaffController@index')->name('staff.index');
    Route::get('/ngo', 'App\Http\Controllers\NgoController@index')->name('ngo.index');
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);

	//activity
    Route::get('/activity-list', 'App\Http\Controllers\ActivityController@index')->name('activity.index');
    Route::get('/create-activity', 'App\Http\Controllers\ActivityController@create')->name('activity.create');
    Route::post('/store-activity', 'App\Http\Controllers\ActivityController@store')->name('activity.store');
    Route::get('/edit-activity/{id}', 'App\Http\Controllers\ActivityController@edit')->name('activity.edit');
    Route::post('/update-activity/{id}', 'App\Http\Controllers\ActivityController@update')->name('activity.update');
    Route::post('/delete-activity', 'App\Http\Controllers\ActivityController@delete')->name('activity.delete');
});
