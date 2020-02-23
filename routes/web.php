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
// Route::get('/about', 'AboutController@showabout');




//Route::get('/', 'EmailController@getForm')->name('home');
Route::get('/services', 'ServicesController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('homez');



Route::post('/candidatez', 'EmailController@techForm')->name('storePost');
Route::post('services', 'DemandesController@store')->name('storeDemande');
Route::get('formulaire', 'ServicesController@formulaire');

Route::get('contact', 'ContactController@getForm')->name('contact');
Route::post('contact', 'ContactController@postForm');


Route::get('/', 'EmailController@getForm')->name('home');
Route::post('/newsletters',  'EmailController@postForm')->name('storeEmail');

Route::post('/candidatez', 'EmailController@techForm')->name('storePost');
Route::post('/Rappelez', 'EmailController@phone')->name('storePhone');
Route::get('/action', 'ServicesController@action')->name('live_search.action');
Route::get('/serv{id}', 'ServicesController@show');

Route::get('contact', 'ContactController@getForm')->name('contact');
Route::post('contact', 'ContactController@postForm');

Route::get('listUser','UserController@index')->name('listUser');
Route::delete('listUser/{id}','UserController@destroy')->name('user.destroy');
//user.edit
Route::get('User/{id}','UserController@update')->name('user.edit');
Route::put('User/{id}','UserController@update');

   


// Route::get('/connect', function () {
//     return view('welcome');
// });
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Route::group(['middleware' => 'auth'], function () {
// 	Route::get('table-list', function () {
// 		return view('pages.table_list');
// 	})->name('table');

// 	Route::get('typography', function () {
// 		return view('pages.typography');
// 	})->name('typography');

// 	Route::get('icons', function () {
// 		return view('pages.icons');
// 	})->name('icons');

// 	Route::get('map', function () {
// 		return view('pages.map');
// 	})->name('map');

// 	Route::get('notifications', function () {
// 		return view('pages.notifications');
// 	})->name('notifications');

// 	Route::get('rtl-support', function () {
// 		return view('pages.language');
// 	})->name('language');

// 	Route::get('upgrade', function () {
// 		return view('pages.upgrade');
// 	})->name('upgrade');
// });

// Route::group(['middleware' => 'auth'], function () {
// 	Route::resource('user', 'UserController', ['except' => ['show']]);
// 	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
// 	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
// 	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
// });

