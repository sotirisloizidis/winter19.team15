<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Windows version 5.6.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Latest compiled JavaScript -->
    
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
        <h4 class="logo ml-4 text-white">
            I R O N S K Y<br>
            <span>FITNESS</span>
        </h4>
        
        <div class="container">
          <div class="row">
              <div class="col-7 mx-auto">
                  <div class="list-group" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active" id="list-n1-list" data-toggle="list" href="#list-n1" role="tab" aria-controls="n1">Notification 1</a>
                      <a class="list-group-item list-group-item-action" id="list-n2-list" data-toggle="list" href="#list-n2" role="tab" aria-controls="n2">Notification 2</a>
                      <a class="list-group-item list-group-item-action" id="list-n3-list" data-toggle="list" href="#list-n3" role="tab" aria-controls="n3">Notification 3</a>
                      <a class="list-group-item list-group-item-action" id="list-n4-list" data-toggle="list" href="#list-n4" role="tab" aria-controls="n4">Notification 4</a>
                      <a class="list-group-item list-group-item-action" id="list-n5-list" data-toggle="list" href="#list-n5" role="tab" aria-controls="n5">Notification 5</a>
                      <a class="list-group-item list-group-item-action" id="list-n6-list" data-toggle="list" href="#list-n6" role="tab" aria-controls="n6">Notification 6</a>
                      <a class="list-group-item list-group-item-action" id="list-n7-list" data-toggle="list" href="#list-n7" role="tab" aria-controls="n7">Notification 7</a>
                  </div>
              </div>
              <div class="col-5"> 
                  <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="list-n1" role="tabpanel" aria-labelledby="list-n1-list">
                          <h5 class="text text-black">
                              <div class="container">
                                  <div class="card card-body" id="content0">
                                  </div>
                              </div>
                          </div>
                          </h5>
                      <div class="tab-pane fade" id="list-n2" role="tabpanel" aria-labelledby="list-n2-list">
                          <h5 class="text text-black">
                              <div class="container">   
                                  <div class="card card-body" id="content1">
                                  </div>   
                              </div>
                          </h5>
                      </div>
                      <div class="tab-pane fade" id="list-n3" role="tabpanel" aria-labelledby="list-n3-list">
                          <h5 class="text text-black">
                              <div class="container">
                                  <div class="card card-body" id="content2">
                                  </div> 
                              </div>
                          </h5>
                      </div>
                      <div class="tab-pane fade" id="list-n4" role="tabpanel" aria-labelledby="list-n4-list">
                          <h5 class="text text-black">
                             <div class="container">
                                  <div class="card card-body" id="content3">
                                  </div>
                              </div>
                          </h5>
                      </div>
                      <div class="tab-pane fade" id="list-n5" role="tabpanel" aria-labelledby="list-n5-list">
                          <h5 class="text text-black">
                             <div class="container">
                                  <div class="card card-body" id="content4">
                                  </div>
                              </div>
                          </h5>
                      </div>     
                      <div class="tab-pane fade" id="list-n6" role="tabpanel" aria-labelledby="list-n6-list">
                          <h5 class="text text-black">
                             <div class="container">
                                  <div class="card card-body" id="content5">
                                  </div>
                              </div>
                          </h5>
                      </div>     
                      <div class="tab-pane fade" id="list-n7" role="tabpanel" aria-labelledby="list-n7-list">
                          <h5 class="text text-black">
                             <div class="container">
                                  <div class="card card-body" id="content6">
                                  </div>
                              </div>
                          </h5>
                      </div>                   
                  </div>
              </div>
          </div>                          
        </div>
    </div>
</body>
<script>
        $(function () {
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navbarclient.html");
        });
        
       //$.ajax({ url: "./php/pastPrograms.php", type:"GET",  success: function(data) { console.log(data); } }); 
      var i;
         $.ajax({ url: "./php/day0.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("</p>"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+4; j++) 
              {
                  text += data[j];
              }
                                      
              $("#content0").html(text); 
          } 
         });
         $.ajax({ url: "./php/day1.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("</p>"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+4; j++) 
              {
                  text += data[j];
              }
                                      
              $("#content1").html(text);
          } 
         });
         $.ajax({ url: "./php/day2.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("</p>"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+4; j++) 
              {
                  text += data[j];
              }
                                      
              $("#content2").html(text); 
          } 
         }); 
         $.ajax({ url: "./php/day3.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("</p>"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+4; j++) 
              {
                  text += data[j];
              }
                                      
              $("#content3").html(text); 
          } 
         });
         $.ajax({ url: "./php/day4.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("</p>"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+4; j++) 
              {
                  text += data[j];
              }
                                      
              $("#content4").html(text); 
          } 
         });
         $.ajax({ url: "./php/day5.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("</p>"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+4; j++) 
              {
                  text += data[j];
              }
                                      
              $("#content5").html(text); 
          } 
         });
         $.ajax({ url: "./php/day6.txt", type:"GET",
           success: function(data) 
           {  
              var pos = data.indexOf("<h1");  
              var pos1 = data.lastIndexOf("</p>"); 
              var j;
              var text = "";
              for (j = pos; j < pos1+4; j++) 
              {
                  text += data[j];
              }
                                      
              $("#content6").html(text);
          } 
         });
</script>
</html>