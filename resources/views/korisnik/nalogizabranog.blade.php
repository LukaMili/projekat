<!doctype html>
@extends('layouts.app')
@section('content')
<div class="jumbotron" style="background-color: beige">
    <div class="row">
        
    <div class="col-md-8">
        <h1>Nalog korisnika <strong><span style="color: goldenrod">{{$data['user']->name}}</span></strong></h1>
        <hr/>
    </div>
    </div>
    <div class="row">
        
    <div class=" col-md-8">
        
        <p class="lead">email: {{$data['user']->email}}</p>
        <p class="lead">Stanje na racunu: {{$data['user']->stanjeRacuna}} din</p>
        
        
        </div>
        
    </div>
    <br>
    <br>
    <br>
    <h4>Transakcije</h4>
   
    <hr style="background-color: white"/>
     <div class="row">
     <div class="col-md-12">
         <div class="table-wrapper-scroll-y">
       <table class="table table-bordered table-striped table-primary">
    <thead>
        <tr>
            <th>Datum</th>
            <th>Komentar</th>
            <th>Iznos</th>            
        </tr>
    </thead>
    <tbody>
        @foreach($data['Transakcije'] as $transakcija)
        <tr>
            <td>{{$transakcija->created_at}}</td><td>{{$transakcija->komentar}}</td><td>{{$transakcija->iznos}}</td>
         </tr>
        @endforeach
    </tbody>
    </table>
    </div>
     </div>
    </div>
    
    
    <br><br>
    
    <div class="row">
        <div class="col-md-4">
        <div class="card border-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><h4>Racuni</h4></div>
            <div class="card-body">
            
            <p class="card-text">Kliknite na dugme ispod kako bi ste videli racune ovog korisnika</p>
            <hr/>
             <form method="post" action="/nalog/prikaziracune">
                {{ csrf_field() }}
                
                <input type="hidden" value="{{$data['user']->id}}" name="id"/>
                
                <input type="submit" class="btn btn-primary" value="Racuni"/>
                </form>
            </div>
        </div>
</div>
        
        </div>
        
        
    
      <div class="row">
        <div class="col-md-4">
        <div class="card border-danger mb-3" style="max-width: 20rem;">
            <div class="card-header"><h4>Obrisi korisnika</h4></div>
            <div class="card-body">
                
                <p class="card-text">Kliknite na dugme ispod kako bi ste obrisali nalog ovog korisnika</p>
                <hr>
                <form method="post" action="{{action ('AdministracijaController@BrisanjeKorisnika') }}">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-danger" value="Obrisi nalog" onclick="return confirm('Da li ste sigurni da zelite da obrisete ovog korisnika?')"/>
                </form>
            </div>
        </div>
        </div>
           
         </div>
   
            
            
            
            <!--modalna-->
            <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Doplati novac na racun</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        
        
      <div class="modal-body">       
        <form method="post" action="">
        {{ csrf_field() }}
        <div class="form-group" style="width:100%;">
            <input id="iznos" type="text" placeholder="Unesite iznos za doplatu" name="iznos" style="width: 100%">
            <br>
            <div id="alert" class="alert alert-dismissible alert-danger" hidden="">             
                
                <strong>Mozete uneti samo brojeve, sa opcionim decimalnim zarezom(123 ili 123.45)</strong>
            </div>
        </div>
        <input type="submit" value="Doplati" class="btn btn-success" name="dugme" onclick="return Proveri()"/>
    </form>
      </div>
        
        
      
        </div>
        </div>
        </div>
            
            <script type="text/javascript" src="{{asset("js/datatables.min.js")}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset("css/datatables.min.css")}}"/> 
    <link rel="stylesheet" type="text/css" href="{{asset("css/datatablesSredjivanje.css")}}"/> 
    <script>$(document).ready(function () {
    $.noConflict();
    var table = $('#tabela').DataTable();
});</script>
             <script>
        function Proveri()
        {
            var regex = /^[0-9]+(\.[0-9]+)?$/;
            var iznos = document.getElementById("iznos").value;
            if(regex.test(iznos))
            {
                return true;
            }
            else
            {
                document.getElementById('alert').removeAttribute('hidden');
                return false;
            }
        }
    </script>
</div>
@endsection