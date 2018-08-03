
@extends('layouts.app')
@section('content')

    <div class="jumbotron">
        <div class="row">
            <div class="col col-auto">
        <div class="table-primary table table-bordered">
                
            
            
            <table>
            
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
                      @if (Auth::user()->name==$k->name )  @else <button>Izbrisi</button> <button>Unapredi</button> @endif   
                    </td>
                    
                </tr>
           
            @endforeach
            
            
            </table>
            
            </div>
                
                
                    
                
            </div>
            </div>
                      
        </div>
            
           
            
        
        
        
    </div>

@endsection

