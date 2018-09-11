
@extends('layouts.app')

@section('content')

    @if(Auth::user()->role=='korisnik')
    <!--PRIKAZ ZA KORISNIKA -->
    
    <div class="jumbotron" style="background-color: beige">
            <div class="row">
                <div class="col md-6 offset-2">
                    Ulogovani ste kao <strong><span style="color: goldenrod">{{Auth::user()->role}}</span> {{auth()->user()->name}}</strong>
                </div>  
            </div>
            <br><br>
            
            
            <div class="row">
                <div class="slikacont" style="background-color: aquamarine; width: 75%;margin: 0 auto;">
                    
                
                        <a data-toggle="modal" data-target="#myModal"><img id="slikaforma" src="{{asset('slike/resp-main.jpg')}}" width="100%" height="330px" alt="Proizvodi" onclick="submit" style="cursor: pointer">
                            <div class="centriran" style="cursor: pointer">
                                    <h1 style="">Uplacivanje sredstava</h1>
                                    <p class="small">Kliknite da dodate sredstva</p>
                                </div></a>
                        
                                <div class="doledesno">
                                    <p style="font-size: large">Trenutno stanje: {{Auth::user()->stanjeRacuna}} dinara<p>
                                </div>
                  
                    
                </div>
            </div>
            
            
            <br><br>
            
            <div class="row">
               <div class="slikacont" style="background-color: aquamarine; width: 75%;margin: 0 auto;">
                    <form id="formaAdminKorisnici3" method="post" action="/nalog/prikaziracune">
                {{csrf_field()}}
                <input type="hidden" value="{{Auth::user()->id}}" name="id">
                        <img id="slikaforma3" src="{{asset('slike/racun.JPG')}}" width="100%" height="330px" alt="Proizvodi" style="cursor: pointer">
                                <div class="centriran">
                                    <h1 style="color:white ;text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;">Racuni</h1>
                                    <p class="small">Kliknite da pogledate Vase racune</p>
                               </div>
                  
                    </form>
                </div>
            </div>
            
             <br><br>
             
             
             <div class="row">
               <div class="slikacont" style="background-color: aquamarine; width: 75%;margin: 0 auto;">
                    <form id="formaAdminKorisnici4" method="get" action="/nalog/korpa">
                {{csrf_field()}}
                <input type="hidden" value="{{Auth::user()->id}}" name="id">
                        <img id="slikaforma4" src="{{asset('slike/korpa.JPG')}}" width="100%" height="330px" alt="Proizvodi" style="cursor: pointer">
                                <div class="centriran">
                                    <h1 style="color:white ;text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;">Moja Korpa</h1>
                                    <p class="small">Kliknite da pogledate Vasu korpu</p>
                               </div>
                  
                    </form>
                </div>
                 
            </div>
        </div>

    
    <script>
           
           var form3 = document.getElementById("formaAdminKorisnici3");
           var form4 = document.getElementById("formaAdminKorisnici4");
 
           document.getElementById("slikaforma3").addEventListener("click", function () {
            form3.submit();
           });
           document.getElementById("slikaforma4").addEventListener("click", function () {
            form4.submit();
           });
           
           function proveri(){
               var input=document.getElementById("iznos").value;
               var regex= /^[0-9]+$/;
               var rez=regex.test(input);
               
               if (rez==false){
                   return false;
                   document.getElementById("alert").removeAttribute('hidden');
               }
               else{
                   return true;
               }
           }
           
       </script>
    
    
    
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
        

    @endif
    
       <script>
           var form = document.getElementById("formaAdminKorisnici");
           var form2 = document.getElementById("formaAdminKorisnici2");
           var form3 = document.getElementById("formaAdminKorisnici3");
           
            document.getElementById("slikaforma").addEventListener("click", function () {
            form.submit();
           });
           
           document.getElementById("slikaforma2").addEventListener("click", function () {
            form2.submit();
           });
           
           document.getElementById("slikaforma3").addEventListener("click", function () {
            form3.submit();
           });
           
           
            function proveri(){
               var input=document.getElementById("iznos").value;
               var regex= /^[0-9]+$/;
               
               
               if (regex.test(input)){
                   return true;
                   
               }
               else{                
                   document.getElementById("alert").removeAttribute('hidden');
                   return false;
               }
           }
           
       </script>
        
    
    
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="margin-top: 50%">
      <div class="modal-header">
          <h4 class="modal-title">Uplacivanje sredstava</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <form method="post" action="{{action('KorisnikController@DoplatiNovac')}}" style="text-align: center">
              {{csrf_field()}}
              <input type="text" placeholder="Unesite cifru" autocomplete="off" id="iznos" name="iznos" style="width: 80%;height: 37px;margin-left: auto">
              <p id="alert" hidden="" style="color: crimson">
                  Unesite samo cifre!
              </p>
      </div>
      <div class="modal-footer">
          <button type="submit" onclick="return proveri()" class="btn btn-secondary" style="width: 33%;margin: 0 auto;">Uplati</button>
        
      </div>
    </form>
</div>
  </div>
</div>
  
    @endsection

    
    
    
  