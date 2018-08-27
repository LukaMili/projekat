<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Kategorija; //ucitavanje Modela bitno!!!
use Laravel\Proizvod;

class KategorijeController extends Controller
{
    public function Odeca(){
        $kategorije= Kategorija::find(1); //testiranje
        $proizvodi= Proizvod::all();
        $data=['kategorije'=>$kategorije,'proizvodi'=>$proizvodi];
        return view('kategorije.odeca')->with('data',$data);
    }
    
     public function Obuca(){
         $kategorije= Kategorija::find(2);
         $proizvodi= Proizvod::all();
         $data=['kategorije'=>$kategorije,'proizvodi'=>$proizvodi];
        return view('kategorije.obuca')->with('data',$data);
    }
    
     public function Aksesoari(){
         $kategorije= Kategorija::find(3);
         $proizvodi= Proizvod::all();
         $data=['kategorije'=>$kategorije,'proizvodi'=>$proizvodi];
        return view('kategorije.aksesoari')->with('data',$data);
     }
    
    
      
    
    
}
