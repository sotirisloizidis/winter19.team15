
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">

    <link href="css/sign-in.css" rel="stylesheet">
 
  </head>
  <body class="text-center center" style="background-color:#1E4072;">        
    <form method="POST" action="php/sign-in-PHP.php" class="form-signin center">
      <h2 class="font-weight-normal" style="color:white;">Welcome to Ironsky</h2>
      <h1 class="font-weight-normal motto">Be strong, brave and humble</h1>
      <a href="https://www.ironsky-fitness.com/"><img class="ironskyimg" src="images/ironsky2.png" alt=""> </a>
       <br>
      <div><input  type="username" name="Email" id="email" class="form-control" placeholder="Email*" autofocus></div>
        <br>
      <div><input  type="password" name="Password" id="password" class="form-control" placeholder="Password*" ></div>
        <br>
      <!--<a class="buttons" width="800" height="450" type="button" >Sign in</a> -->
      <input class="buttons" type="submit" value="Sign-in">
      <br> <br>
      <a href="reset.php" class="passwd">Forgot password</a>
       <br>     
      <div class="contact-info">
      <br>
    <a href="https://www.facebook.com/ironsky.fitness/"><img class="contact" src="images/facebook.png"> </a>
    <a href="https://www.instagram.com/ironsky.fitness/?hl=en"><img class="contact" src="images/insta.png" > </a>
    <a href="https://www.youtube.com/channel/UCEXv002x7GgComrUKPB130w/featured"><img class="contact" src="images/youtube.png" > </a>    
    <a href="supportTest.php"><img class="contact" src="images/email.png" > </a>
      </div> 
  
      <p class="mt-5 mb-3 text-muted"><font color="#4B5D7F">By proceding you also agree to the Terms of Service and Privacy Policy</p>
    </form>

  </body>       
</html>