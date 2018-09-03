@extends('layouts.app')
@section('content')
<head>

    <script>
        
            function izaberi(){
                    var radios = document.getElementsByName('velicina');
                    document.getElementById('velicinahiddenid').value ="S";

            for (var i = 0, length = radios.length; i < length; i++)
            {
             if (radios[i].checked)
             {
       
              document.getElementById('velicinahiddenid').value = radios[i].value;
              
             }
             
            }
           
             
        }
            
    </script>
</head>
<div class="jumbotron">
    <div class="row">
    <div class="col-md-6">
    <img class="card-img-top" src="{{asset("SlikeProizvoda/".$proizvod->slika)}}" style="display:block" alt="Card image cap">
    </div>
    
    <div class="col-md-6>">
        <div style="overflow: hidden">
    <h3>{{$proizvod->naziv}}</h3>
    <br>
    
    <p style="max-width: 500px;">{{$proizvod->opis}}</p>
        
     <ul class="list-group list-group-flush">
     
    <li class="list-group-item">Cena: {{$proizvod->cenaPoKomadu}} din.</li>
    <li class="list-group-item">Preostalo proizvoda: <p>{{$proizvod->kolicina}} komada</p></li>
    
  </ul>
        <br><br>
        
        <form method="post" name="forma" onchange="izaberi()" action="/proizvod/dodajukorpu"> 
            
          @if($proizvod->kategorija_id=='1' or $proizvod->kategorija_id=='3')
        <div class="text-center">
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="velicina" id="option1" value="S" autocomplete="off" checked=""> S
                    </label>
                    
                    <label class="btn btn-secondary">
                        <input type="radio" name="velicina" id="option2" value="M" autocomplete="off"> M
                    </label>
                    
                    <label class="btn btn-secondary">
                        <input type="radio" name="velicina" id="option3" value="L" autocomplete="off"> L
                    </label>
                    
                    <label class="btn btn-secondary">
                        <input type="radio" name="velicina" id="option3" value="XL" autocomplete="off"> XL
                    </label>
                    
                    <label class="btn btn-secondary">
                        <input type="radio" name="velicina" id="option3" value="XXL" autocomplete="off"> XXL
                    </label>
        </div>
        </div>
          @else
          <div class="form-group">
      <label for="exampleSelect1">Izaberite velicinu</label>
      <select class="form-control" id="velicina" name="velicina">
        <option>40</option>
        <option>41</option>
        <option>42</option>
        <option>43</option>
        <option>44</option>
        <option>45</option>
        <option>46</option>
        <option>47</option>
      </select>
    </div>
          @endif
        <br><br>
           
        
        
        <div> 
              {{ csrf_field() }}
            <input type="number" value="1" name="kolicina" max="{{$proizvod->kolicina}}" min="1" width="5%"> 
            
        <label for="kolicinaid"><i>Količina</i></label>
        </div>
            
        <br><br>
        
        <div class="text-center"> 
            @if (($proizvod->kolicina)>1)
            <label for="btn">
                Dodaj u korpu!
            </label>
            <button data-toggle="tooltip" data-placement="top" title="Stavi u korpu" type="submit" id="btn" style="background-color: transparent;border: none;cursor: pointer">
                <img id="slikakorpa" src="{{asset('slike/ikonice/cart-icon.png')}}" alt="nema">
            </button>
            @else 
            <button class="btn btn-danger" disabled="">Nema na stanju</button>
            @endif
        </div>
        <input type="hidden" value="{{$proizvod->id}}" name="id">
        <input type="hidden" id="velicinahiddenid" name="velicinahidden">
        </form>
  </div>
    </div>
    </div>
    <br><br>
    <div class="text-center">
   <a href="javascript:history.back()"><button type="button" style="text-align: center" class="btn btn-warning">Vrati se</button></a>
</div>
    

 
    <br>
    
    

@endsection