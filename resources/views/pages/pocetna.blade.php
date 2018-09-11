

@extends('layouts.app')
@section('content')

<div class="jumbotron" style="background-color: beige;">

    
    
    
    
    
    
    
    
    
   @if(!Auth::user())
   <p> NAPRAVI PRIKAZ ZA GOSTA</p>
   
   @else
   
   <p>NAPRAVI PRIKAZ ZA USERA</p>
   
   @endif
  

</div>
@endsection

