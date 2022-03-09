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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers\frontend',],function(){
    Route::get('/','FrontendController@view');
});

Route::view('home','home')->middleware('auth');
Route::group(['namespace'=>'App\Http\Controllers','middleware'=>'auth'],function(){
 //  frontend management routes are groupped here
    Route::prefix('profile')->group(function(){
        Route::get('/view','ProfileController@view')->name('profile.view');
        Route::get('/add','ProfileController@add')->name('profile.add');
        Route::post('/store','ProfileController@store')->name('profile.store');
        Route::get('/edit/{id}','ProfileController@edit')->name('profile.edit');
        Route::post('/update/{id}','ProfileController@update')->name('profile.update');
        Route::get('/delete/{id}','ProfileController@delete')->name('profile.delete');
        Route::get('/password/view', 'ProfileController@passwordview')->name('password.view');
	    Route::post('/password/update', 'ProfileController@passwordupdate')->name('password.update');

    });
});


