<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
         public function pocetna()
        {
            return view('pages.pocetna');
        }
    
         public function nalog()
        {
            return view('pages.nalog');
        }
          public function prodavnica()
        {
            return view('pages.prodavnica');
        }
        public function uplati(){
            return view('korisnik.uplati');
        }
}
