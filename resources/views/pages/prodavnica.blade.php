@extends('layouts.app')
@section('content')

<div class="wrapper"  style="margin-top: 0;"><br><br>
    <div class="row">
        
        <div class="col-md-6">
        <a href="/prodavnica/odeca">
            <img src="{{asset('slike/clothing_oncourt.jpg')}}" id="slika" class="img-thumbnail float-left" style="background-color: beige; border: none">
            <div class="caption" style="text-align: center;background-color: beige;border-radius: 10px"><strong>Odeca</strong></div>
        </a>
    </div>
        
        <div class="col-md-6">
        <a href="/prodavnica/obuca">
            <img src="{{asset('slike/shoes_oncourt.jpg')}}" id="slika" class="img-thumbnail float-right" style="background-color: beige; border: none">
            <div class="caption" style="text-align: center;background-color: beige;border-radius: 10px"><strong>Obuca</strong></div>
        </a>
    </div>
    </div>
        <br>
    <div class="row">
        
            <div class="col-md-6 mx-auto">
                <a href="/prodavnica/aksesoari">
                    <img src="{{asset('slike/loptee.jpg')}}" id="slika" class="img-thumbnail mx-auto"  style="background-color: beige; border: none">
                    <div class="caption" style="text-align: center;background-color: beige;"><strong>Aksesoari</strong></div>
                </a>
            </div>
             
    </div>
    
    <br><br><br>
    </div>

    
    
@endsection
