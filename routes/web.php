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
Route::get('/nalog', 'PagesController@nalog')->name('nalog');
Route::get('/prodavnica', 'PagesController@prodavnica')->name('prodavnica');

Route::get('/prodavnica/odeca', 'KategorijeController@odeca')->name('odeca');
Route::get('/prodavnica/obuca', 'KategorijeController@obuca')->name('obuca');
Route::get('/prodavnica/aksesoari', 'KategorijeController@Aksesoari')->name('aksesoari');


//administracija routes
Route::get('/nalog/korisnici', 'AdministracijaController@VratiKorisnike')->name('korisnici');
Route::post('/nalog/BrisanjeKorisnika', ['uses'=>'AdministracijaController@BrisanjeKorisnika']);
Route::get('/nalog/NalogKorisnika', ['uses'=>'AdministracijaController@NalogKorisnika','as'=>'NalogKorisnika']);
Route::get('/Administracija/Roba', ['uses'=>'AdministracijaController@AdministracijaRobe','as'=>'AdministracijaRobe']);
Route::post('/nalog/promote', 'AdministracijaController@Promote');

//administracija proizvodi routes
Route::get('/Administracija/DodajProizvod', 'AdministracijaController@DodajProizvod');
Route::post('/Administracija/DodajProizvod', 'AdministracijaController@DodavanjeProizvoda');
Route::get('/Administracija/Roba', 'AdministracijaController@AdministracijaRobe')->name('roba');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
