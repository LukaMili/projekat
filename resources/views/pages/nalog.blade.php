
@extends('layouts.app')

@section('content')

    @if(Auth::user()->role=='korisnik')
    <!--PRIKAZ ZA KORISNIKA -->
    
        <div class="jumbotron">
            <div class="row">
                <div class="col md-6 offset-2">
                    Ulogovani ste kao <strong><span style="color: goldenrod">{{Auth::user()->role}}</span> {{auth()->user()->name}}</strong>
                </div>  
            </div>
            <br><br>
            <div class="row">
                <div class="col md-6">
            Stanje na racunu: <strong>{{auth()->user()->stanjeRacuna}} din</strong> 
                </div>
                <div class="col md-6">
            <a href=""> <div class="btn btn-sm btn-secondary" id="dugme">Uplatite sredstva</div></a>
                </div>
            </div>
            
            <br><br>
            
            <div class="row">
                <div class="col md-6">
              Pregled kupovina i racuna
                </div>
                <div class="col md-6">
             <a href=""> <div class="btn btn-sm btn-secondary" id="dugme">Pregled kupovina</div></a>
                </div>
            </div>
             <br><br>
             <div class="row">
                <div class="col md-6">
              Moja korpa
                </div>
                <div class="col md-6">
                    <a href=""> <div class="btn btn-sm btn-secondary" id="dugme">Moja korpa</div></a>
                </div>
            </div>
        </div>

    @else
        
    <!--PRIKAZ ZA ADMINA -->

    <div class="jumbotron">
            <div class="row">
                <div class="col md-6 offset-2">
                    Ulogovani ste kao  <strong><span style="color:green">{{auth()->user()->role}}</span> - {{auth()->user()->name}}</strong>
                </div>  
            </div>
            <br><br>
            <div class="row">
                <div class="col md-6">
            Pregled korisnika i promovisanje uloge 
                </div>
                <div class="col md-6">
            <a href="/nalog/korisnici"> <div class="btn btn-sm btn-secondary" id="dugme">Pregled korisnika</div></a>
                </div>
            </div>
            
            <br><br>
            
            <div class="row">
                <div class="col md-6">
              Pregled proizvoda i dodavanje novih
                </div>
                <div class="col md-6">
                   <form method="get" action="{{action('AdministracijaController@AdministracijaRobe')}}">
                       <button class="btn btn-sm btn-secondary" type="submit" id="dugme">Pregled proizvoda</button>
                    </form>
                </div>
            </div>
             <br><br>
             <div class="row">
                <div class="col md-6">
              Pregled kupovina i racuna
                </div>
                <div class="col md-6">
                    <a href=""> <div class="btn btn-sm btn-secondary" id="dugme">Pregled kupovina</div></a>
                </div>
            </div>
        </div>
        
       
        
    @endif
    
  
    @endsection

    
    
    
  