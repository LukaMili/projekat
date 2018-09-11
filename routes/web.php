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
Route::get('/nalog', 'AdministracijaController@NalogTrenutnog')->name('nalog');
Route::post('/nalog/prikaziracune','KorisnikController@Racuni');
Route::post('/nalog/prikaziracun','KorisnikController@PrikaziIzabraniRacun');

Route::get('/nalog/korpa', 'KorisnikController@KorpaKorisnika')->name('korpa');
Route::post('/nalog/korpa/kupi','KorisnikController@Kupi');
Route::get('/prodavnica', 'PagesController@prodavnica')->name('prodavnica');

Route::get('/prodavnica/odeca', 'KategorijeController@odeca')->name('odeca');
Route::get('/prodavnica/obuca', 'KategorijeController@obuca')->name('obuca');
Route::get('/prodavnica/aksesoari', 'KategorijeController@Aksesoari')->name('aksesoari');

Route::get('/proizvod', 'KorisnikController@prikazi');
Route::post('/proizvod/dodajukorpu', 'ProizvodController@DodajUKorpu');
Route::post('/proizvod/dodajnastanje', 'AdministracijaController@DodajNaStanjeProizvod');

Route::post('/nalog/korpa/obrisi','ProizvodController@ObrisiIzKorpe');

//administracija routes
Route::get('/nalog/korisnici', 'AdministracijaController@VratiKorisnike')->name('korisnici');
Route::post('/nalog/BrisanjeKorisnika', ['uses'=>'AdministracijaController@BrisanjeKorisnika']);
Route::get('/nalog/NalogKorisnika', ['uses'=>'AdministracijaController@NalogKorisnika','as'=>'NalogKorisnika']);
Route::get('/Administracija/Roba', ['uses'=>'AdministracijaController@AdministracijaRobe','as'=>'AdministracijaRobe']);
Route::post('/nalog/promote', 'AdministracijaController@Promote');

//administracija proizvodi routes
Route::get('/Administracija/DodajProizvod', 'AdministracijaController@DodajProizvod');
Route::post('/Administracija/DodajProizvod', 'AdministracijaController@DodavanjeProizvoda');
Route::post('/Administracija/ObrisiProizvod', 'AdministracijaController@ObrisiProizvod');
Route::get('/Administracija/Roba', 'AdministracijaController@AdministracijaRobe')->name('roba');

//Route::get('/nalog/uplati', 'PagesController@uplati');
Route::post('/nalog/uplati','KorisnikController@DoplatiNovac');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
