@extends('layouts.app')

@section('content')

    @if(Auth::user()->role=='korisnik')
    <!--PRIKAZ ZA KORISNIKA -->
    
        <div class="jumbotron">
            Ulogovani ste kao {{auth()->user()->role}}
            <br><br>
            Stanje na racunu {{auth()->user()->stanjeRacuna}}
            
            <a href=""> <div class="btn btn-sm btn-secondary">Uplatite sredstva</div></a>
            <br><br>
              Pregled kupovina i racuna
             <a href=""> <div class="btn btn-sm btn-secondary">Pregled kupovina</div></a>
             <br><br>
              Moja korpa
             <a href=""> <div class="btn btn-sm btn-secondary">Moja korpa</div></a>
        </div>

    @else
    <!--PRIKAZ ZA ADMINA -->

       <div class="jumbotron">
           Zdravo admine <br>
            
            Pregled korisnika i promovisanje uloge
             <a href=""> <div class="btn btn-sm btn-secondary">Pregled korisnika</div></a>
             <br><br>
              Pregled proizvoda i dodavanje novih
             <a href=""> <div class="btn btn-sm btn-secondary">Pregled proizvoda</div></a>
             <br><br>
              Pregled kupovina i racuna
             <a href=""> <div class="btn btn-sm btn-secondary">Pregled kupovina</div></a>
        </div>
    
    @endif
    @endsection
