<?php

    include 'initSeshTrainer.php';
    
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Latest compiled JavaScript -->
    <script>
        $(function () {
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navTrainer.php");
        });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
</head>
  
  <body style="background-color:#1E4072;">
  <!-- START OF NAVIGATION BAR -->
  
      <div id="includedContent"></div>
    <!-- END OF NAVIGATION BAR -->
  
   <br>
  <div class="form-gap">
      <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
  </div>
  
  <div class="container">
      <div class="row">
      <div class="col-md-10 mx-auto ">
      
      <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Current Day Statistics</h3>
                </div>
                <div class="card-body">
         <canvas id="myChart"></canvas>   
          <script src="js/mdb.js"></script>
                     <script src="js/chart.js"></script>
  
                </div>
  </div>
  </div>
  
  </div>
  </div>
  </div>
  
  
  </body>
