<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/



//Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


#Route::get('/admin/home',[App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
#Route::get('admin-login',[App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');

Route::group(['namespace'=>'App\Http\Controllers\Admin','middleware'=>'is_admin'],function(){
    Route::get('/admin/home','AdminController@admin')->name('admin.home');

   

    //  frontend management routes are groupped here
    Route::prefix('users')->group(function(){
        Route::get('/view','AdminController@view')->name('users.view');
        Route::get('/add','AdminController@add')->name('users.add');
        Route::post('/store','AdminController@store')->name('users.store');
        Route::get('/edit/{id}','AdminController@edit')->name('users.edit');
        Route::post('/update/{id}','AdminController@update')->name('users.update');
        Route::get('/delete/{id}','AdminController@delete')->name('users.delete');

    });


    Route::prefix('logos')->group(function(){
        Route::get('/view','LogosController@view')->name('logos.view');
        Route::get('/add','LogosController@add')->name('logos.add');
        Route::post('/store','LogosController@store')->name('logos.store');
        Route::get('/edit/{id}','LogosController@edit')->name('logos.edit');
        Route::post('/update/{id}','LogosController@update')->name('logos.update');
        Route::get('/delete/{id}','LogosController@delete')->name('logos.delete');

    });

    Route::prefix('slider')->group(function(){
        Route::get('/view','SliderController@view')->name('slider.view');
        Route::get('/add','SliderController@add')->name('slider.add');
        Route::post('/store','SliderController@store')->name('slider.store');
        Route::get('/edit/{id}','SliderController@edit')->name('slider.edit');
        Route::post('/update/{id}','SliderController@update')->name('slider.update');
        Route::get('/delete/{id}','SliderController@delete')->name('slider.delete');

    });

    Route::prefix('portfolio_a')->group(function(){
        Route::get('/view','PortfolioController@view_a')->name('portfolio_a.view');
        Route::get('/add','PortfolioController@add_a')->name('portfolio_a.add');
        Route::post('/store','PortfolioController@store_a')->name('portfolio_a.store');
        Route::get('/edit/{id}','PortfolioController@edit_a')->name('portfolio_a.edit');
        Route::post('/update/{id}','PortfolioController@update_a')->name('portfolio_a.update');
        Route::get('/delete/{id}','PortfolioController@delete_a')->name('portfolio_a.delete');

    });

     Route::prefix('about')->group(function(){
        Route::get('/view','AboutController@view')->name('about.view');
        Route::get('/add','AboutController@add')->name('about.add');
        Route::post('/store','AboutController@store')->name('about.store');
        Route::get('/edit/{id}','AboutController@edit')->name('about.edit');
        Route::post('/update/{id}','AboutController@update')->name('about.update');
        Route::get('/delete/{id}','AboutController@delete')->name('about.delete');

    });
    Route::prefix('musabaha')->group(function(){
        Route::get('/view','MusabahaController@view')->name('musabaha.view');
        Route::get('/add','MusabahaController@add')->name('musabaha.add');
        Route::post('/store','MusabahaController@store')->name('musabaha.store');
        Route::get('/edit/{id}','MusabahaController@edit')->name('musabaha.edit');
        Route::post('/update/{id}','MusabahaController@update')->name('musabaha.update');
        Route::get('/delete/{id}','MusabahaController@delete')->name('musabaha.delete');
        Route::get('/view','MusabahaController@view')->name('musabaha.view');

    });

    Route::prefix('contact')->group(function(){
        Route::get('/view','ContactController@view')->name('contact.view');
        Route::get('/add','ContactController@add')->name('contact.add');
        Route::post('/store','ContactController@store')->name('contact.store');
        Route::get('/edit/{id}','ContactController@edit')->name('contact.edit');
        Route::post('/update/{id}','ContactController@update')->name('contact.update');
        Route::get('/delete/{id}','ContactController@delete')->name('contact.delete');

    });
   
    
});