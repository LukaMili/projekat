

@extends('layouts.app')
@section('content')

    
        <style>
        .parallax {
            /* The image used */
            background-image:url('/slike/mitchell.jpg');

            /* Set a specific height */
            min-height: 400px; 

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: 50% 15%;
            background-repeat: no-repeat;
            background-size: auto;
        }
        
         .parallax2 {
            /* The image used */
            background-image:url('/slike/lebron.jpg');

            /* Set a specific height */
            min-height: 400px; 

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: 50% 15%;
            background-repeat: no-repeat;
            background-size: 1050px;
        }
        </style>
        
        <div class="jumbotron" style="background-color: beige;margin-bottom: 0">

           

    <div class="parallax"></div>
    
    <p id="demo" class="mx-auto" style="font-size: larger; font-weight: bold ;width: 50%;height: 200px;padding: 30px">
        
</p>
    
     <div class="parallax2"></div>
    
   

    <p>
       
    </p>
</div>
        <div class="footer" style="width: 100%;background:lightgrey; height: 250px;margin-top: 0 !important">
            <div class="row">
                <div class="col-md-4">
            <div class="mapa" style="margin-left: 20px;"> 
                
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250.3250709784241!2d20.415237829271316!3d44.778667052402675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6fda10a5d159%3A0x513f9f9d4a5d5bb4!2z0J_QvtC20LXRiNC60LAsINCR0LXQvtCz0YDQsNC0!5e0!3m2!1ssr!2srs!4v1536708689603" width="300" height="200" frameborder="0" style="border:1px solid grey;margin-top: 24px" allowfullscreen></iframe>   
            </div>
                </div>
                
                <div class="col-md-4">
            
            <p style="text-align: justify;height: 200px; width: 300px; font-family: serif;font-size: larger;display: inline-block;margin-top: 25px">
                            <span><b>Adresa:</b></span> Pozeska 78, Beograd <br><br>
                            <span><b>Kontakt telefon:</b></span> 011/354-5-354<br><br>
                            <span><b>Radno vreme:</b></span> Pon-Sub 09-20h<br><br>
                            <span><b>E-mail:</b></span><a href="mail.google.com"> dunkster@gmail.com</a>
                </p>
                </div>
                
                <div class="col-md-4" style="vertical-align: middle">
                    <div id="ikonice" class="row" style=" line-height: 15;">
           
                        <div class="col-md-3">
                           <a href="http://facebook.com">
                               <img id="ikonica-slika" src="{{asset('slike/ikonice/fbc.png')}}"/>
                            </a> 
                        </div>
          
                        <div class="col-md-3">
                           <a href="http://instagram.com">
                               <img id="ikonica-slika" src="{{asset('slike/ikonice/ig_1.png')}}"/>
                            </a> 
                        </div>
                        
                        <div class="col-md-3">
                           <a href="http://twitter.com">
                               <img id="ikonica-slika" src="{{asset('slike/ikonice/twitter.png')}}"/>
                            </a> 
                        </div>
        
                    </div>
                </div>

        
        </div>
        </div>
        
        <footer class="bg-dark">
  <div class="footer text-center py-3" style="color: lightgrey">
      Luka Milisavljevic 21-16<br>
      © 2018 Copyright:
    <a href="/"> Dunkster.rs</a>
  </div>


</footer>
 <script>

    var i = 0;
    var txt = ' Dobro dosli u Dunkster Web Shop.\n\
Ovde cete naci sirok asortiman kosarkaske opreme,\n\
od patika do steznika, s toga, bili vi amater ili profesionalac,\n\
Zelimo Vam prijatnu kupovinu i puno srece na terenu!\n\
'; 
    var speed = 50; 

    function typeWriter() {
      if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
    
   window.addEventListener('load', typeWriter());

    </script>   

        
        
     
        
        
        
@endsection

    