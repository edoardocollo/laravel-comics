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

Route::get('/', 'Guest\PageController@index');
Route::get('/comics/{id}', 'Guest\PageController@show')->name('comics');

Auth::routes(['register' => false]);

Route::get('/admin', 'HomeController@index')->name('admin');
Route::resource('admin/comics', 'Admin\ComicController');
Route::resource('admin/musts', 'Admin\MustController');
Route::resource('admin/artists', 'Admin\ArtistController');
Route::resource('admin/writers', 'Admin\WriterController');
Route::resource('admin/series', 'Admin\SerieController');
