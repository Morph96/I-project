<?php require 'PDOfunctions.php'?>

<!DOCTYPE HTML>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>EENMAAL, ANDERMAAL</title>
</head>
<body>
    <div class="container-fluid">
        <div><?php include 'header.php'?></div>
        
        
        <div class="row" >
           
           <div class="col-md-2 offset-2 border border-dark">
                ADVERT 1
                <img src="images/poah.jpg" class="rounded img h-50 img-fluid">
                <h2>Lorem Ipsum</h2>
                <br>
                <h5>Beschrijving:</h5>
                <p id ="demo"> countdown_date: <? echo countdown_date()?></p>
               <script>
                   // Set the date we're counting down to


                   var countDownDate = new Date("2018 05 11 12:00:00").getTime();

                   // Update the count down every 1 second
                   var x = setInterval(function() {

                       // Get todays date and time
                       var now = new Date().getTime();

                       // Find the distance between now an the count down date
                       var distance = countDownDate - now;

                       // Time calculations for days, hours, minutes and seconds
                       var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                       var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                       var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                       var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                       // Display the result in the element with id="demo"
                       document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                           + minutes + "m " + seconds + "s ";

                       // If the count down is finished, write some text
                       if (distance < 0) {
                           clearInterval(x);
                           document.getElementById("demo").innerHTML = "EXPIRED";
                       }
                   }, 1000);
               </script>



           </div>
            
            <div class="col-md-2 border border-dark">
                ADVERT 2
                <img src="images/test.jpg" class="rounded img h-50 img-fluid">
                <h2>Lorem Ipsum</h2>
                <br>
                <h5>Beschrijving:</h5>
                <p>blablablablablablatestie testie</p>    
           </div>
            
           <div class="col-md-2 border border-dark">
                ADVERT 3
                <img src="images/test.jpg" class="rounded img h-50 img-fluid">
                <h2>Lorem Ipsum</h2>
                <br>
                <h5>Beschrijving:</h5>
                <p>blablablablablablatestie testie</p>    
           </div>
            
            <div class="col-md-2 border border-dark">
                ADVERT 1
                <img src="images/test.jpg" class="rounded img h-50 img-fluid">
                <h2>Lorem Ipsum</h2>
                <br>
                <h5>Beschrijving:</h5>
                <p>blablablablablablatestie testie</p>    
           </div>
            
            
        </div>

        <div><?php include 'footer.php'?></div>
    </div>
</body>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

