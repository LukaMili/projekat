
@extends('layouts.app')
@section('content')
<head>
    <script>
        function Potvrdi(){
         
        document.getElementById('forma').submit();
    }
    
</script>
</head>
@if($proizvodi)
<div class="jumbotron">
    <div class="row">
    @foreach($proizvodi as $proizvod)
    <div class="col-md-3">
      <div class="card" style=" width: 100%; display: inline-block;float: left; margin-top: 20px;">
          
          <div class="containercard">  
 
          <img class="card-img-top" style="height: 200px;" src="{{asset("SlikeProizvoda/".$proizvod->slika)}}" alt="Card image cap">
          <form id="forma" method="post" action="/nalog/korpa/obrisi">
              {{csrf_field()}}
              <input type="hidden" value="{{$proizvod->id}}" name="id">
              <button type="button" data-toggle="modal" data-target="#myModal"  class="btnzatvori" aria-label="Close" style="background-color: transparent">
                    <span aria-hidden="true"><img src="{{asset('slike/ikonice/Red_X.png')}}" style="width:15px"></span>
                </button>
          </form>
          
      </div>
          <div class="card-body" style="height: auto">
              <h5 class="card-title" style="height:55px;">{{$proizvod->naziv}}</h5>
    
    <div style="width: 100%;height: 100px;overflow:auto;"  class="scrollbox">{{$proizvod->opis}}</div>
     <ul class="list-group list-group-flush">
     
    <li class="list-group-item">Cena po komadu: {{$proizvod->cenaPoKomadu}} din.</li>
    <li class="list-group-item">Proizvoda poruceno: <p>{{$proizvod->kolicina}}</p></li>
    <li class="list-group-item">Velicina: </li>
    
  </ul>
</div>
      </div>
    </div>
    @endforeach
    </div>
</div>
@else
<div class="jumbotron">
    <p>Nema proizvoda u korpi</p>
    <p>Kliknite ovde kako biste otisli u prodavnicu</p>
    <a href="/prodavnica"><button class="btn btn-default">Prodavnica</button></a>
</div>
@endif

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Potvrda</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <p>Da li ste sigurni da zelite da vratite izabrani proizvod?</p>
      </div>
      <div class="modal-footer">
          <button type="button" onclick="Potvrdi()" class="btn btn-default">Izbaci iz korpe</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
      </div>
    </div>

  </div>
</div>

<style>
    .btnzatvori{
        position: absolute;
        right: 5px;
        top: 5px;
        background-color: crimson;
        color: whitesmoke;
        cursor: pointer;
        border: 1px solid transparent;
    }
    .btnzatvori{
        outline: none;
    }
    
    .containercard{
        position: relative;
    }

</style>

@endsection