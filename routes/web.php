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

Auth::routes();

// Route::get('/login','AuthController@login')->name('login');
// Route::post('/postlogin', 'AuthController@postlogin')->name('dashboard');
// Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index');
    
    // Siswa
    Route::get('/siswa', 'SiswaController@index');
    Route::post('/siswa/create','SiswaController@create');
    Route::get('/siswa/{id}/edit','SiswaController@edit');
    Route::post('/siswa/{id}/update','SiswaController@update');
    Route::get('/siswa/{id}/delete','SiswaController@delete');
    Route::get('/siswa/{id}/profile', 'SiswaController@profile');

    // Thread
    Route::resource('threads', 'ThreadsController');

    // Reply
    Route::resource('replies','RepliesController',['only'=>['edit','update','destroy']]);
    Route::post('/replies/create/{thread}','RepliesController@CreateReply')->name('storecomment');
});


