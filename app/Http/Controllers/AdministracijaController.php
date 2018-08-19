<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\User;
use Laravel\Kategorija;
use Laravel\Proizvod;

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
        return redirect('/nalog/korisnici');
    }
    
    public function NalogKorisnika(Request $req)
    {
        $user = User::Find($req->id);
        $trans = $user->Transakcije;
        $data = ['user' => $user,'Transakcije' => $trans];
        
        return view('korisnik.nalogizabranog')->with('data',$data);
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
    
     public function AdministracijaRobe()
    {
        $kategorije = Kategorija::all();
        $proizvodi = Proizvod::all();
        $data = ['kategorije'=>$kategorije,'proizvodi'=>$proizvodi];
        
        return view('admin.listaproizvoda')->with('data',$data);
    }

    
     public function DodajProizvod()
    {
        $kategorije = Kategorija::all();
        $proizvodi=Proizvod::all();
        $data = ['kategorije' => $kategorije,'proizvodi'=>$proizvodi];
        return view('admin.dodajproizvod')->with('data',$data);
    }
    public function DodavanjeProizvoda(Request $req)
    {
        $photoName = time().'.'.$req->slika->getClientOriginalExtension();
        $req->slika->move(public_path('SlikeProizvoda'), $photoName);
        $proizvod = new Proizvod();
        $proizvod->naziv = $req->naziv;
        $proizvod->opis = $req->opis;
        $proizvod->kategorija_id = $req->kategorija;
        $proizvod->slika = $photoName;
        $proizvod->kolicina = $req->broj;
        $proizvod->cenaPoKomadu = $req->cena;
        $proizvod->save();
        
        
    return redirect('/Administracija/Roba');
    }
    
    
}
