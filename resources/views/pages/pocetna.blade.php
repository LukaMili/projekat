

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
    <p id="demo" class="mx-auto" style="font-size: larger; font-weight: bold ;width: 50%;height: 200px;padding: 30px"></p>
     <div class="parallax2"></div>
    
   

    <p>
       
    </p>
</div>
        <div class="footer bg-secondary" >
            Footer
        </div>
        
        
        <script>

    var i = 0;
    var txt = ' Dobro dosli u Dunkster Web Shop.\n\
Ovde cete naci sirok asortiman kosarkaske opreme,\n\
od patika do steznika, s toga, bili vi amater ili profesionalac,\n\
Zelimo Vam prijatnu kupovinu i puno srece na terenu!\n\
'; /* The text */
    var speed = 50; /* The speed/duration of the effect in milliseconds */

    function typeWriter() {
      if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
    
   window.addEventListener('load', typeWriter())

    </script>   
        
@endsection

    