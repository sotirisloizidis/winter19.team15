<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Latest compiled JavaScript -->
    <script>
        $(function () 
	{
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navbarclient.html");
        });
    </script>

    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">

<style>
.checked
{
    background-color: blue;
}
</style>
   
</head>
<body style="background-color:#1E4072;">
    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>

    <!-- END OF NAVIGATION BAR -->
    <br>
    <div class="form-gap">
        <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
    </div>
    <br><br>
    <!-- START OF CONTAINER FOR CLASS CREATION -->
    <div class="container">
        <div class="row py-3">
            <div class="col-sm-12 mx-auto">
                <!-- form card register -->
                <form data-ajax=”false”>
                    <div class="card ">
                        <div style="overflow-x:auto;">
                            <div class="card-header">
                                <h3 class="mb-0">IRONSKY FITNESS<?php echo date(" &#8226; F d, Y"). "<br>"; ?></h3> 
                                <p></p>
                                <h3 class="mb-0">Program of the Day</h3> 
                            </div>

                            <div class="card-body">
                          
                               
                                <!-- Default panel contents -->

                                <div class="row">
                                    <div class="col-sm-18 mx-auto">
                                        <table class="table table-bordered" >
					<form class="contact100-form validate-form" method="GET" action= "php/Program-fetch">

                                         
						<thead>
                                                <tr>
                                                 
                                                    <th scope="col"><?php echo  date("l  d-m-Y", strtotime('-1 days')). "<br>"; ?></th>
                                                    <th scope="col"><?php echo  date("l  d-m-Y", strtotime('+0 days')). "<br>"; ?></th>
                                                    <th scope="col"><?php echo  date("l  d-m-Y", strtotime('+1 days')). "<br>"; ?></th>
                                                    <th scope="col"><?php echo  date("l  d-m-Y", strtotime('+2 days')). "<br>"; ?></th>
                                                    <th scope="col"><?php echo  date("l  d-m-Y", strtotime('+3 days')). "<br>"; ?></th>
                                                    <th scope="col"><?php echo  date("l  d-m-Y", strtotime('+4 days')). "<br>"; ?></th>
                                                </tr>
                                            </thead>
                                           
					 	<tbody>
                                              
                                                 <tr>
                                                 
                                                 

						<td data-id="0"  data-position="0-1">
						    						
						
					
					
						
							
						</td>


						 <td data-id="0"  data-position="0-2">
						
						<p class="" style="white-space:pre-wrap;">
						<strong>ENDURANCE <br></strong>
						5 Rounds for Max Reps (30min)  
						<br><span style="text-decoration:underline">Station 1:</span>
						<br>30sec Max Hang P. Cleans @43/30kg <br>1min Max Calories Ski-erg  <br><br>
						<em>Rest 30sec</em> 
						<br><br><span style="text-decoration:underline">Station 2:</span>
						<br>30sec Max Shoulder To OH @43/30kg <br>1min Max Calories Assault Bike  <br><br>
						<em>Rest 30sec </em> 
						<br><br><span style="text-decoration:underline">Station 3:</span>
						<br>30sec Max Burpees <br>1min Max Calories Row  <br><br>
						<em>Rest 30sec</em>
						</p>
						
						</td>
                                                
						 <td data-id="0"  data-position="0-3"></td>
                                                 <td data-id="0"  data-position="0-4"></td>
                                                 <td data-id="0"  data-position="0-5"></td>
                                                 <td data-id="0"  data-position="0-6"></td>
                                               
						 </tr>
                                                                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>




                           

                        </div>
                    </div>
                </form>


            </div>
        </div>
        <!-- /form card register -->
    </div>
<script>
</script>   
 <!-- END OF CONTAINER FOR CLASS CREATION -->

</body>
</html>