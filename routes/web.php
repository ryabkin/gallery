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

Route::get('/','App\Http\Controllers\IndexController@index')->name('index');
Route::get('/catalog','App\Http\Controllers\CatalogController@catalog')->name('catalog');
Route::get('/catalog/{catalog}','App\Http\Controllers\CatalogController@category')->name('category');
Route::get('/form','App\Http\Controllers\FormController@form')->name('form');
Route::post('/form','App\Http\Controllers\FormController@formsend')->name('formsend');
Route::get('/about','App\Http\Controllers\AboutController@about')->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
