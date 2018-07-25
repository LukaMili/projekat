<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pocetna()
        {
            return view('pages.pocetna');
        }
    
         public function onama()
        {
            return view('pages.onama');
        }
          public function prodavnica()
        {
            return view('pages.prodavnica');
        }
}
