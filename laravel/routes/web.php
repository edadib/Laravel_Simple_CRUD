<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NgoController;

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
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

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

	//staff and user
    Route::get('/staff', 'App\Http\Controllers\StaffController@index')->name('staff.index');
    Route::get('/add_user', 'App\Http\Controllers\StaffController@add_user')->name('staff.add_user');
    Route::post('/insert_user', 'App\Http\Controllers\StaffController@insert_user')->name('staff.insert_user');
    Route::get('/staff-view/{staff_id}', 'App\Http\Controllers\StaffController@viewstaff')->name('staff.view');
    Route::get('/user', 'App\Http\Controllers\StaffController@userlist')->name('staff.user');
    Route::post('/user/delete_user', 'App\Http\Controllers\StaffController@delete_user')->name('staff.delete_user');

	//ngo
    Route::get('/ngo', 'App\Http\Controllers\NgoController@index')->name('ngo.index');
	Route::get('/ngo/add_ngo', 'App\Http\Controllers\NgoController@add_ngo')->name('ngo.add_ngo');
	Route::post('/ngo/insert_ngo', 'App\Http\Controllers\NgoController@insert_ngo')->name('ngo.insert_ngo');
	Route::post('/ngo/delete_ngo', 'App\Http\Controllers\NgoController@ngodelete')->name('ngo.delete_ngo');

	//application
	Route::get('/application', 'App\Http\Controllers\ApplicationController@index')->name('application.index');
	Route::get('/register', 'App\Http\Controllers\ApplicationController@add_app')->name('application.add_app');
	Route::post('/insert_app', 'App\Http\Controllers\ApplicationController@insert_app')->name('application.insert_app');
	Route::post('/delete_app', 'App\Http\Controllers\ApplicationController@appdelete')->name('application.appdelete');
	
	//activity
    Route::get('/activity-list', 'App\Http\Controllers\ActivityController@index')->name('activity.index');
    Route::get('/create-activity', 'App\Http\Controllers\ActivityController@create')->name('activity.create');
    Route::get('/edit-activity/{id}', 'App\Http\Controllers\ActivityController@edit')->name('activity.edit');
    Route::post('/store-activity', 'App\Http\Controllers\ActivityController@store')->name('activity.store');
    Route::post('/update-activity/{id}', 'App\Http\Controllers\ActivityController@update')->name('activity.update');
    Route::post('/delete-activity/{id}', 'App\Http\Controllers\ActivityController@delete')->name('activity.delete');

	//announcenment
	Route::get('/announ', 'App\Http\Controllers\AnnouncementController@index')->name('announ.index');
	Route::get('/create_announ', 'App\Http\Controllers\AnnouncementController@create')->name('announ.create');
	Route::post('/announ/store', 'App\Http\Controllers\AnnouncementController@store')->name('announ.store');
});
