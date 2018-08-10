@extends('layouts.app')
@section('content')

<div class="wrapper" style="background-color: beige;padding-bottom: 25px;">
         <div class="col-md-12">
             <br><br>
             <h2 style="color: ">Lista korisnika</h2>
             <br><br>
            
                
            
            
             <table class="table-bordered table table-dark" style="background-color: threeddarkshadow">
            
                 <thead>
                <tr>
                    <th style="text-align: center">
                        Username
                    </th>
                
                
                    <th style="text-align: center">
                       Email adresa
                    </th>
                    
                     <th style="text-align: center">
                        Role
                    </th>
                    
                     <th style="text-align: center">
                        Raspoloziva sredstva
                    </th>
                    
                     <th style="text-align: center">
                        Funkcije
                    </th>
                </tr>
                 </thead>
        
                 <tbody>
            @foreach($korisnici as $k)
                
            
                 <tr>
                     
                     <td>
                       
                         @if (Auth::user()->name == $k->name )
                            {{$k->name.' (You)'}} 
                         @else
                            <a href="/home/korisnici/{{$k->id}}">
                            {{$k->name}}
                            </a>
                         @endif
                           <!--   Podesiti da ucita samo izabranog korisnika   -->
                    </td>
   
                    <td>
                    {{$k->email}}
                    </td>
                    
                    <td>
                        {{$k->role}} &nbsp 
                    </td>
                    
                    <td style="text-align: center">
                    {{$k->stanjeRacuna}} din
                    </td>
                 
                     <td>
                
                <div class="row">
                    @if (Auth::user()->name == $k->name )
                    
                    @else
                   
                    <div class="col-md-4" style="text-align: center;">
                    <form method="get" action="{{action ('AdministracijaController@NalogKorisnika') }}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$k->id}}" name="id"/>
                    <button title="Pogledaj nalog" style="background-color: transparent;" type="submit" class="btn btn-primary"><img src="{{asset('slike/ikonice/acc.png')}}" style="width: 25px;height: 25px;"></button>
                    </form>
                    </div>
                    
                    
                    <div class="col-md-4" style="text-align: center;">
                    <form method="post" action="{{action ('AdministracijaController@BrisanjeKorisnika') }}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$k->id}}" name="id"/>
                    <button title="Obrisi"  type="submit" class="btn btn-warning" onclick="return confirm('jeste li sigurni da zelite da obrisete ovog korisnika?')"><img src="{{asset('slike/ikonice/trash.png')}}" style="width: 25px;height: 25px;"></button>
                    </form>
                    </div>
                    
                     @if($k->role=='admin')
                    <div class="col-md-4" style="text-align: center;">
                    <form method="post" action="{{action ('AdministracijaController@Promote') }}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$k->id}}" name="id"/>
                    <button title="Demote" value="Demote" type="submit" class="btn btn-light" onclick="return confirm('jeste li sigurni da ovog ovog korisnika zelite da postavite na ulogu korisnika?')">
                        <img src="{{asset('slike/ikonice/dole.png')}}" style="width: 25px;height: 25px;"></button>
                    </form>
                    </div>
                    @else
                    <div class="col-md-4" style="text-align: center;">
                    <form method="post" action="{{action ('AdministracijaController@Promote') }}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$k->id}}" name="id"/>
                    <button title="Promote" value="Promote"  type="submit" class="btn btn-light" onclick="return confirm('jeste li sigurni da zelite da postavite ovog korisnika za administratora?')">
                        <img src="{{asset('slike/ikonice/gore.png')}}" style="width: 25px;height: 25px;"></button>
                    </form>
                    </div>
                    @endif
                    
                    @endif
                    
                    
                    
                    
                </div>
                </td>
                </tr>
           
            @endforeach
            
                 </tbody>
            </table>
            
            </div>
    </div>   
                
                    
            
           
                      
        
            
           
            
        
        
        
    </div>

@endsection

