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
    return view('pages.pocetna');
});

Route::get('/', 'PagesController@pocetna')->name('pocetna');
Route::get('/onama', 'PagesController@onama')->name('onama');
Route::get('/prodavnica', 'PagesController@prodavnica')->name('prodavnica');

Route::get('/odeca', 'KategorijeController@odeca')->name('odeca');
Route::get('/obuca', 'KategorijeController@obuca')->name('obuca');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
