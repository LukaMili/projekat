
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
                    <form method="get" action="{{action('PagesController@uplati')}}">
                       <button class="btn btn-sm btn-secondary" type="submit" id="dugme">Uplati sredstva</button>
                    </form>
                </div>
            </div>
            
            <br><br>
            
            <div class="row">
                <div class="col md-6">
            Pregled kupovina i racuna:
                </div>
                <div class="col md-6">
                    <form method="post" action="/nalog/prikaziracune">
                        {{csrf_field()}}
                       <button class="btn btn-sm btn-secondary" type="submit" id="dugme">Pregled kupovina</button>
                    </form>
                </div>
            </div>
            
             <br><br>
             <div class="row">
                <div class="col md-6">
              Moja korpa
                </div>
                 
                <div class="col md-6">
                    <form method="get" action="/nalog/korpa">
                    <button type="submit" class="btn btn-sm btn-secondary" id="dugme">Moja korpa</button>
                    </form>
                </div>
                 
            </div>
        </div>

    @else
        
    <!--PRIKAZ ZA ADMINA -->

    <div class="jumbotron" style="background-color: beige;">
            <div class="row">
                <div class="col md-6 offset-2">
                    Ulogovani ste kao  <strong><span style="color:green">{{auth()->user()->role}}</span> - {{auth()->user()->name}}</strong>
                </div>  
            </div>
            <br><br>
            
            
            
            <div class="row">
                <div class="slikacont" style="background-color: aquamarine; width: 75%;margin: 0 auto;">
                    <form id="formaAdminKorisnici" method="get" action="{{action('AdministracijaController@AdministracijaRobe')}}">
                
                    <img id="slikaforma" src="{{asset('slike/products.JPG')}}" width="100%" alt="Proizvodi" onclick="submit" style="cursor: pointer">
                                <div class="centriran">
                                    <h1 style="color:white ;text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;">Proizvodi</h1>
                               </div>
                  
                    </form>
                </div>
            </div>
            
            <br><br>
            
            <div class="row">
                <div class="slikacont" style="background-color: aquamarine; width: 75%;margin: 0 auto;">
                   <form id="formaAdminKorisnici2" method="get" action="/nalog/korisnici">
                       
                           <img id="slikaforma2" src="{{asset('slike/users.JPG')}}" width="100%" height="330px" alt="Korisnici" style="cursor: pointer">
                               <div class="centriran">
                                    <h1 style="color: black;text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">Korisnici</h1>
                               </div>
                    </form>
                </div>
            </div>
             <br><br>
            
        </div>
        
       <script>
           var form = document.getElementById("formaAdminKorisnici");
           var form2 = document.getElementById("formaAdminKorisnici2");
           
            document.getElementById("slikaforma").addEventListener("click", function () {
            form.submit();
           });
           
           document.getElementById("slikaforma2").addEventListener("click", function () {
            form2.submit();
           });
           
       </script>
        
    @endif
    
  
    @endsection

    
    
    
  