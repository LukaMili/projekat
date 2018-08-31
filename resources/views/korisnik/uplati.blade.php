@extends('layouts.app')
@section('content')


<div class="jumbotron" style="background-color: beige">
    <form class="form-check" style="text-align: center; background-color: white;" method="post" action="{{action('KorisnikController@DoplatiNovac')}}">
        <label for="iznos">
            Uplacivanje sredstava na Vas racun
        </label>
        <br>
        {{ csrf_field() }}
               <input type="text" name="iznos" placeholder="Unesite sredstva" id="iznos">
               <br><br>
               <input type="submit" value="Uplati" onclick="confirm('Da li ste sigurni da zelite da uplatite?')">
    </form>
</div>
@endsection
