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

Route::get('/', 'UserController@index');
Route::get('/pengumuman', 'UserController@pengumuman');
Route::get('/katalok', 'KatalokController@index')->name('katalok');
Route::get('/form/{beasiswa}', 'FormController@index')->name('form');
Route::post('/form', 'FormController@store')->name('user.form.store');
Route::get('/info/{beasiswa}', 'InfoController@index')->name('info');
// Route::get('/admin/beasiswa', 'Admin\BeasiswaController@index');
// Route::get('/admin', 'Admin\DashboardController@index');

Route::prefix('admin')
    ->middleware('auth')
    ->namespace('Admin')
    ->group(function() {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
            Route::get('/beasiswa', 'BeasiswaController@index');
            Route::get('/tambah-beasiswa', 'BeasiswaController@create');
            Route::get('/edit-beasiswa/{id}', 'BeasiswaController@show');
            Route::resource('pengumuman','FormulirController');
            Route::post('/postBeasiswa', 'BeasiswaController@store');
            Route::post('/delete', 'BeasiswaController@destroy');
            Route::post('/delete/form', 'FormulirController@destroy');
            Route::post('/updateBeasiswa', 'BeasiswaController@update');

        Route::resource('form', 'FormController');
    });
// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');
