@extends('layouts.app')

@section('content')
<div class="jumbotron" style="background-color:beige;">
    <div class="col-md-8 center-block" style="margin: 0 auto;">
        <div id="print">
        <div class="row">
            <h2 style="margin-bottom: 20px;">Broj racuna: {{$racun->id}}</h2>
    
        </div>
    
    <div class="row">
    <ul class="list-group col-md-12">
        @foreach($stavke as $stavka)
        <li class="list-group-item d-flex justify-content-between align-items-center" style="border: 1px solid silver;">
            {{$stavka->nazivProizvoda}}
            
            <div>Kolicina: {{$stavka->kolicina}}, Iznos stavke:{{$stavka->iznos}}</div>
        </li>
        @endforeach
    </ul>
        
    </div>
        <br>
        <div class="row">
            <div class="col-md-6 text-left">
            <h5>Ukupna cena: {{$racun->ukupanIznos}}</h5>
            </div>
            <div class="col-md-6 text-right">
            <p><strong>Racun izdat:</strong> {{$racun->created_at}}</p>
            </div>
        </div>
        </div>
        
            
            
        <div class="text-right">
            <img style="width:70px; height:70px;" onclick="printElem('print');"  src="{{asset('slike/ikonice/print-icon.png')}}"/>
        </div> 
        <br><br>
        <div class="text-center">
                         
           
            <form method="post" action="/nalog/prikaziracune" style="text-align: center">
                {{ csrf_field() }}
                @if(Auth::user()->role == 'admin')
                <input type="hidden" value="{{$racun->user_id}}" name="id"/>
                @endif
                <button type="submit " class="btn btn-warning" >Nazad</button>
                </form>
        </div>
        
    </div>
    <script>
        function printElem(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print', 'height=600,width=800');
    mywindow.document.write('<html><head><title>Print</title>');
    mywindow.document.write('</head><body><div style="border: 1px solid black; margin:auto; width:35%; text-align:left; padding:10px;">');
    mywindow.document.write(content);
    mywindow.document.write('</div></body></html>');
    mywindow.document.close();
    mywindow.focus();
    mywindow.print();
    mywindow.close();
    return true;
}
    </script>
        
</div>
@endsection