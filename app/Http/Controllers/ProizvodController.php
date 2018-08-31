<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Proizvod;
use Laravel\Korpa;
use Laravel\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Kategorija;

class ProizvodiController extends Controller
{
    
     public function __construct()
    {
        
        $this->middleware('auth');
    }
                         
    
public function  DodajUKorpu(Request $req)
{   
    $proizvodID = $req->id;
    $kolicina = $req->kolicina;
    $postojeci = Korpa::where('user_id', Auth::user()->id);
    $postojeci = $postojeci->where('proizvod_id',$proizvodID);
    if($postojeci->count() == 0)
    {
        $korpa = new Korpa();
        $korpa->user_id=Auth::user()->id;
        $korpa->proizvod_ID = $proizvodID;
        $korpa->kolicina = $kolicina;
        
        $korpa->save();
    }
    else 
    {
        $korpa = $postojeci->firstOrFail();
        $korpa->kolicina += $kolicina;
        $korpa->save();
    }
    $proizvod = Proizvod::find($proizvodID);
    $proizvod->kolicina -= $kolicina;
    $proizvod->save();
    return redirect('/nalog/korpa');
}
public function ObrisiIzKorpe(Request $req)
{
    $celaKorpa = User::Find(Auth::user()->id)->korpe->where("proizvod_id",$req->id);
    foreach ($celaKorpa as $k)
    {
        if($k->proizvod_id == $req->id)
        {
            $korpa=$k;
        }
    }
    $proizvod = Proizvod::Find($k->proizvod_id);
    $proizvod->kolicina += $korpa->kolicina;
    $proizvod->save();
    Korpa::destroy([$korpa->id]);
    return redirect('/nalog/korpa');
    
}
}
