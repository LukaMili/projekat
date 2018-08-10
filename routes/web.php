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


//administracija routes
Route::get('/home/korisnici', 'AdministracijaController@VratiKorisnike')->name('korisnici');
Route::post('/home/BrisanjeKorisnika', ['uses'=>'AdministracijaController@BrisanjeKorisnika']);
Route::get('/home/NalogKorisnika', ['uses'=>'AdministracijaController@NalogKorisnika','as'=>'NalogKorisnika']);
Route::get('/Administracija/Roba', ['uses'=>'AdministracijaController@AdministracijaRobe','as'=>'AdministracijaRobe']);
Route::post('/home/Promote', 'AdministracijaController@Promote');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
