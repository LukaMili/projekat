@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <div class="row">
    <div class="col-md-6">
    <img class="card-img-top" src="{{asset("SlikeProizvoda/".$proizvod->slika)}}" style="display:block" alt="Card image cap">
    </div>
    
    <div class="col-md-6>">
         <div>
    <h3>{{$proizvod->naziv}}</h3>
    <br>
    
        <p>{{$proizvod->opis}}</p>
        
     <ul class="list-group list-group-flush">
     
    <li class="list-group-item">Cena: {{$proizvod->cenaPoKomadu}} din.</li>
    <li class="list-group-item">Preostalo proizvoda: <p>{{$proizvod->kolicina}} komada</p></li>
    
  </ul>
        <br><br>
        <div class="text-center">
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
            <input type="radio" name="options" id="option1" autocomplete="off" checked=""> S
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="options" id="option2" autocomplete="off"> M
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="options" id="option3" autocomplete="off"> L
          </label>
                    <label class="btn btn-secondary">
            <input type="radio" name="options" id="option3" autocomplete="off"> XL
          </label>
                    <label class="btn btn-secondary">
            <input type="radio" name="options" id="option3" autocomplete="off"> XXL
          </label>
        </div>
        </div>
        <br><br>
        
        
        <div class="text-center"> 
            @if (($proizvod->kolicina)>1)
            <label for="btn">
                Dodaj u korpu!
            </label>
            <button type="submit" id="btn" style="background-color: transparent;border: none;cursor: pointer">
                <img id="slikakorpa" src="{{asset('slike/ikonice/cart-icon.png')}}" alt="nema">
            </button>
            @else 
            <button class="btn btn-danger" disabled="">Nema na stanju</button>
            @endif
        </div>
  </div>
    </div>
    </div>
    <br><br>
    <div class="text-center">
   <a href="javascript:history.back()"><button type="button" style="text-align: center" class="btn btn-warning">Vrati se</button></a>
</div>

 
    <br>
    


@endsection