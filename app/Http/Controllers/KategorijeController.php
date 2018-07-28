<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Kategorija; //ucitavanje Modela bitno!!!

class KategorijeController extends Controller
{
    public function Odeca(){
        $kategorije= Kategorija::find(2); //testiranje
        return view('kategorije.odeca')->with('kategorije',$kategorije);
    }
    
     public function Obuca(){
        return view('kategorije.obuca');
    }
    
    
      
    
    
}