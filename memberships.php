<?PHP
include 'initSesh.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script>
        $(function () {
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navbarclient.php");
        });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">

    <link href="css/memberships.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
  <body style="background-color:#1E4072;">
      <!-- START OF NAVIGATION BAR -->

      <div id="includedContent"></div>
      <!-- END OF NAVIGATION BAR -->
      <div class="form-gap">
          <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
      </div>
      <div class="container">

          <h2 style="font-size:2vw;">Monthly Memberships</h2>
          <br>
          <div class="row">

              <div class="col-lg-7 mx-auto">

                  <div class="card text-white bg-danger mb-3 ">
                      <div class="card-body d-flex justify-content-center align-items-center container">
                          <h5 class="card-title" style="font-size:2vw;">Unlimited &#8364;85</h5>
                          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" >
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="P3NNYBKPWUT78">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                          
                            
                      </div>
                  </a>
              </div>
              <div class="col-lg-7 mx-auto">
                  <a class="card text-white bg-primary mb-3">
                      <div class="card-body">
                          <h5 class="card-title" style="font-size:2vw;">3 Sessions per week</h5>
                          <p class="card-text" style="font-size:4vw;">&#8364;75</p>
                      </div>

                  </a>
              </div>
              <div class="col-lg-7 mx-auto">
                  <a class="card text-white bg-warning mb-3">
                      <div class="card-body">
                          <h5 class="card-title" style="font-size:2vw;">Open Gym</h5>
                          <p class="card-text" style="font-size:4vw;">&#8364;70</p>
                      </div>
                  </a>
              </div>
          </div>
          <br><br><br>
          <h2 style="font-size:2vw;">3-Month Memberships</h2>
          <br>
          <div class="row">

              <div class="col-lg-7 mx-auto">

                  <a class="card text-white bg-danger mb-3">
                      <div class="card-body">
                          <h5 class="card-title" style="font-size:2vw;">Unlimited</h5>
                          <p class="card-text" style="font-size:4vw;">&#8364;220</p>
                      </div>
                  </a>
              </div>
              <div class="col-lg-7 mx-auto">
                  <a class="card text-white bg-primary mb-3">
                      <div class="card-body">
                          <h5 class="card-title" style="font-size:2vw;">3 Sessions per week</h5>
                          <p class="card-text" style="font-size:4vw;">&#8364;200</p>
                      </div>
                  </a>
              </div>
              <div class="col-lg-7 mx-auto">

                  <a class="card text-white bg-warning mb-3">
                      <div class="card-body">
                          <h5 class="card-title" style="font-size:2vw;">Open Gym</h5>
                          <p class="card-text" style="font-size:4vw;">&#8364;190</p>
                      </div>
                  </a>
              </div>
          </div>
          <p style="font-size:1vw; color:white;">*After your payment the new plan will be activated upon the expiration of your current membership subscription.</p>
      </div>
  </body>
</html>
