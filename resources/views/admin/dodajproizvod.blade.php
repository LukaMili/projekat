<!doctype html>
@extends('layouts.app')
@section('content')
<body>
    <div class="card" style="background-color: beige">
                <div class="card-header">Dodaj Proizvod</div>
                <div class="card-body">
                    <form method="post" action='/Administracija/DodajProizvod' enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right"><label>Naziv Proizvoda</label></div>
                            <div class="col-md-6"><input type="text" name="naziv" class=" form-control" placeholder="Unesite naziv proizvoda" id="naziv" required="true"/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right"><label>Opis Proizvoda</label></div>
                            <div class="col-md-6"><textarea maxlength="190" rows="6" type="text" name="opis" class=" form-control" placeholder="Unesite opis proizvoda" id="opis" required="true"></textarea></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right"><label>Kategorija proizvoda</label></div>
                                    <div class="col-md-6"> 
                                        <select class="form-control" id="kategorija" name="kategorija">
                                            @foreach($data['kategorije'] as $kategorija)
                                            <option value="{{$kategorija->id}}">{{$kategorija->naziv}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right"><label>Slika proizvoda</label></div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                <input accept="image/*" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" type="file" name="slika" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required="true">
                                <small id="fileHelp" class="form-text text-muted">Odaberite sliku proizvoda koji dodajete</small>
                                    </div>
                                    <div class="col-md-6">
                                <img  id="blah" alt="Nija izabrana slika"  width="200" height="200" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right"><label>Broj artikala</label></div>
                            <div class="col-md-6"><input type="number" name="broj" class=" form-control" placeholder="Unesite broj artikala" id="broj" required="true"/></div>
                        </div>
                         <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right"><label for="naziv">Cena po komadu</label></div>
                            <div class="col-md-6"><input type="text" name="cena" class=" form-control" placeholder="Unesite cenu proizvoda po komadu" id="cena" required="true"/></div>
                        </div>
                        
                           <div class="form-group row">    
                            <div class="col-md-6" style="text-align: center">
                                <a href="/Administracija/Roba" ><button type="button" style="width: 30%" class="btn btn-danger form-control">Otkazi dodavanje</button></a>
                            </div>
                               <div class="col-md-6" style="text-align: center">
                                <input type="submit" class="btn btn-success form-control" style="width: 30%" value="Dodaj proizvod"/>
                            </div>
                        </div>
                       
                    </form>
                </div>
     </div>
</body>
@endsection
