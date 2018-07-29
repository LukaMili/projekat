@extends('layouts.app')

@section('content')

    @if(Auth::user()->role=='korisnik')
    <!--PRIKAZ ZA KORISNIKA -->
    
        <div class="jumbotron">
            Ulogovani ste kao {{auth()->user()->role}}
        </div>

    @else
    <!--PRIKAZ ZA ADMINA -->

       <div class="jumbotron">
            Zdravo admine
        </div>
    
    @endif
    @endsection
