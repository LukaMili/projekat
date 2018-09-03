@extends('layouts.app')
@section('content')

<div class="wrapper" style="background-color: beige;">
    <div class="header" style="padding: 30px;">
        <h2>
            Odeca:
        </h2>
    </div>
    <div class="row">
        
        
         
    @foreach($data['proizvodi'] as $proizvod)
    @if($proizvod->kategorija_id==$data['kategorije']->id)
    <div class="col-md-4" >
        
        
        
        
        <form method="get" action="/proizvod" > 
            
    <div class="card bg-secondary text-white mb-3 mt-3 ml-3 mr-3" style="float: right" >
        <h3 class="card-header" style="height: 91px;overflow: hidden;">{{$proizvod->naziv}}</h3>
          <div class="card-body">
              
            <h5 class="card-title"> {{$data['kategorije']->naziv}}</h5>
            
          </div>
        <input type="hidden" name="id" value="{{$proizvod->id}}">
              <img src="{{asset("SlikeProizvoda/".$proizvod->slika)}}" style="height: 300px; width: 100%; display: block;" alt="Card image">
          <div class="card-body">
              <p class="card-text" style="height: 75px;overflow: hidden">{{$proizvod->opis}}</p>
          </div>
              @if (($proizvod->kolicina)>0)
              <div class="card-footer" style="text-align: center">
                  
                  <button class="btn btn-primary" type="submit">
                      Opsirnije
                  </button>
              </div>
              @else
              <div class="card-footer">
                  <button class="btn btn-sm btn-danger btn-primary" disabled="">
                      Nema na stanju
                  </button>
              </div>
              @endif
             </div>
        </form>>
    </div>
    @endif
       @endforeach
       
        
    </div>
    <br>
             <div class="text-center">
             <a href="/prodavnica"> <button class="btn btn-warning">Vrati se</button></a>   
             </div>
    <br>
    <br>
 
</div>

@endsection