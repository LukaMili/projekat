<?php

namespace Laravel\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Transakcija;
use Laravel\Korpa;
use Laravel\User;

class KorisnikController extends Controller
{
        public function NalogKorisnika()
    {
        $user = User::Find(Auth::user()->id);
        $trans = $user->Transakcije;
        
        $data = ['user' => $user,'Transakcije' => $trans];
        
        return view('korisnik.nalogizabranog')->with('data',$data);
    }
      public function ObrisiNalog()
    {
        $user = Auth::user();
        User::destroy($user->id);
        Auth::logout();
        
        return redirect("/");
    }
    public function DoplatiNovac(Request $req)
    {
   
        $user = User::Find(Auth::user()->id);
        $iznos = $req->iznos;
        $Transakcija = new Transakcija;
        $Transakcija->iznos = $iznos;
        $Transakcija->komentar = 'Korisnik uplatio novac na racun';
        $Transakcija->user_id = $user->id;
        $Transakcija->save();
        $user->stanjeRacuna += $iznos;
        $user->save();
        return redirect('/nalog');
    }
   
    
  
    public function KorpaKorisnika(Request $req)
    {
        $korisnik = Auth::user();
        $korpa = $korisnik->korpe;
        $proizvodi = array();
        $ukupnaCena=0;
        if($korpa->count()>0)
        {
            foreach($korpa as $k)
            {
                
                $proizvod = $k->Proizvod;
                $proizvod->kolicina = $k->kolicina;
                $ukupnaCena+=$proizvod->cenaPoKomadu * $proizvod->kolicina;
                array_push($proizvodi, $proizvod);
            }
        }
        return view('Korisnik.Korpa')->with('proizvodi',$proizvodi)->with('ukupnaCena',$ukupnaCena);
    }
    public function Kupi()
    {
        
        $id = Auth::user()->id;
        $user = User::find($id);
        
        $korpa = $user->korpe;
        $statement = DB::select("show table status like 'racuns'");
        $RacunId = $statement[0]->Auto_increment;
        $ukupnaCena = 0;
        
         foreach($korpa as $k)
            {
                $proizvod = $k->Proizvod;
                $ukupnaCena+=$proizvod->cenaPoKomadu * $k->kolicina;
            }
        if($ukupnaCena>$user->stanjeNaRacunu)
        {
              return redirect()->back()->with('greska', true);
        }
        else
        {
            $user->stanjeNaRacunu-=$ukupnaCena;
            $user->save();
            $transakcija = new Transakcija;
            $transakcija->user_id = $user->id;
            $transakcija->iznos = $ukupnaCena;
            $transakcija->komentar = 'korisnik platio racun '. $RacunId;
            $transakcija->save();
            $zaBrisanje = array();
            $racun = new Racun();
            $racun->ukupanIznos=$ukupnaCena;
            $racun->user_id = $user->id;
            $racun->save();
            foreach($korpa as $k)
            {
                array_push($zaBrisanje, $k->id);
                $proizvod = $k->Proizvod;
                 $stavka= new stavkaRacuna();
                 $stavka-> racun_id = $RacunId;
                 $stavka->iznos = $k->kolicina*$proizvod->cenaPoKomadu;
                 $stavka->nazivProizvoda = $proizvod->naziv;
                 $stavka->proizvod_id = $proizvod->id;
                 $stavka->kolicina=$k->kolicina;
                 $stavka->save();
                 
            }
            Korpa::destroy($zaBrisanje);
            return redirect()->back()->with('uspeh', true);
        }
    }
    public function Racuni(Request $req)
    {
        if($req->id)
        {
            $id = $req->id;
        }
        else
        {
            $id = Auth::user()->id;
        }
        $user = User::find($id);
        $racuni = $user->Racuni;
        return view('Korisnik.PrikaziRacune')->with('racuni',$racuni);
    }
    public function PrikazRacuna(Request $req)
    {
        $racun = Racun::Find($req->id);
        $stavke = $racun->Stavke;
        return view('Korisnik.PrikazRacuna')->with('racun',$racun)->with('stavke',$stavke);
    }
}

