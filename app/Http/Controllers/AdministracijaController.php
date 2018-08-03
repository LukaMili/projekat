<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\User;

class AdministracijaController extends Controller
{
    public function VratiKorisnike(){
    $korisnici= User::all();
    $broj=count($korisnici);
    
    return view('admin.tabelakorisnika')->with('korisnici',$korisnici)->with('broj',$broj);
}


}
