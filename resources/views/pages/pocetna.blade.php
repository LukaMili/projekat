

@extends('layouts.app')
@section('content')

<div class="wrapper" style="background-color: beige; margin-top: 0; text-align: center">
   
   @if(!Auth::user())
   <p> NAPRAVI PRIKAZ ZA GOSTA</p>
   
   @else
   
   <p>NAPRAVI PRIKAZ ZA USERA</p>
   
   @endif
  

</div>
@endsection

