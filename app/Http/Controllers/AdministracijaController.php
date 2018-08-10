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

    public function BrisanjeKorisnika(Request $req)
    {
        $nes = $req->id;
        User::destroy([$nes]);
        return redirect('/home/korisnici');
    }
    
    public function NalogKorisnika(Request $req)
    {
        $user = User::Find($req->id);
        $trans = $user->Transakcije;
        $data = ['user' => $user,'Transakcije' => $trans];
        
        return view('korisnik.nalog')->with('data',$data);
    }
    
     Public function  Promote(Request $req)
    {
        $user = User::find($req->id);
        if($user->role == 'korisnik')
        {
            $user->role = 'admin';
        }
        else
        {
            $user->role = 'korisnik';
        }
        $user->save();
        
        return redirect()->back();
        
    }

}
