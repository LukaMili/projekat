@extends('layouts.app')

@section('content')
<div class="jumbotron" style="background-color: beige">
    <h2>Vaši računi</h2>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
            <thead>
                <tr class="table-secondary">
            <th>Broj racuna</th>
            <th>Racun izdat</th>
            <th>Ukupan iznos</th>
            <th></th>
            </tr>
            </thead>
            <tbody>
        @foreach($racuni as $racun)
        <tr class="table-secondary table-hover">
        <td>{{$racun->id}}</td>
        <td>{{$racun->created_at}}</td>
        <td>{{$racun->ukupanIznos}} dinara</td>
        <td class="text-center">
            <form method="post" action="{{action('KorisnikController@PrikaziIzabraniRacun')}}">
                {{csrf_field()}}
                <input type="hidden" value="{{$racun->id}}" name="id"/>
                <button type="submit" class="btn btn-secondary">Prikazi racun</button>
            </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
    </div>
</div>
     
   
   
</body>
@endsection
