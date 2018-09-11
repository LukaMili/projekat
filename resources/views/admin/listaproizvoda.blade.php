<!doctype html>
@extends('layouts.app')
@section('content')

    
<div class="wrapper" style="background-color: beige;">
    <div class="row">
        
        <div class="col-md-4" ><a href="{{action('AdministracijaController@DodajProizvod')}}">
    <div class="card bg-light text-dark mb-9 mt-3 ml-3 mr-3" style="float: right" >
          <h3 class="card-header" style="height: 91px;overflow: hidden;">Dodajte novi proizvod</h3>
          <div class="card-body">
              
              <h5 class="card-title" style="padding-top: 12px;">Novi proizvod</h5>
           
          </div>
          
              <img src="{{asset("slike/ikonice/add.png")}}" style="height: 300px; width: 100%; display: block;" alt="Card image">
          <div class="card-body">
              <p class="card-text" style="height: 75px;overflow: hidden"><strong>Kliknite ovde kako biste dodali novi proizvod</strong></p>
          </div>
              <div class="card-footer" style="text-align: center;height: 63px">
                  
                  
              </div>
             </div>
        </a>
    </div>
         
    @foreach($data['proizvodi'] as $proizvod)
    
    
    <div class="col-md-4" >
            <form method="get" name="forma" id="forma" action="/proizvod">
                <input type="hidden" value="{{$proizvod->id}}" name="id">
            <div id="kartica" class="card bg-secondary text-white mb-3 mt-3 ml-3 mr-3" style="float: right;min-height: 659px" >
        <h3 class="card-header" style="height: 91px;overflow: hidden;">{{$proizvod->naziv}}</h3>
        <div class="card-body" id="kartica-telo">
              @foreach($data['kategorije'] as $kategorija)
            <h5 class="card-title">@if($kategorija->id==$proizvod->kategorija_id) {{$kategorija->naziv}} @endif</h5>
            @endforeach
          </div>
          
        <img src="{{asset("SlikeProizvoda/".$proizvod->slika)}}" id="kartica-slika" style="height: 300px; width: 100%; display: block;" alt="Card image">
        <div class="card-body" id="kartica-telo-2">
              <p class="card-text" style="height: 75px;overflow: hidden">{{$proizvod->opis}}</p>
          </div>
        <div class="card-footer" style="text-align: center">
                  
                  <button class="btn btn-primary" type="submit">
                      Opsirnije
                  </button>
              </div>
             </div>
       </form>
    </div>
    
 
    
       @endforeach
        
    </div>
    
 
</div>

@endsection



