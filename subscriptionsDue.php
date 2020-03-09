<?php sleep(1); ?>

<?php
$servername="localhost";
$username = "ironsky";
$password = "pfVGdTzSOoLh85yp";
$dbname = "ironsky";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$memberships=array();
$query = "SELECT * FROM Memberships inner join Customer WHERE Customer.Customer_ID=CustomerID AND ExpirationDate<=CURRENT_TIMESTAMP";
$result = mysqli_query($conn, $query)or die("Could not connect database " .mysqli_error($conn));
$i=0;
while($row = mysqli_fetch_assoc($result)) {
        //$row2 = mysqli_fetch_assoc($result2);
        $membershipRow = array(
            "customerID" => $row["CustomerID"],
            "customerName"=> $row["Name"],
             "customerSurname"=>$row["Surname"],
            "exp_date" => $row["ExpirationDate"],
            "type" => $row["Type"]  
        );
         $memberships[$i]=$membershipRow; 
         $i=$i+1;
        }  
?>

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
        $(function () {
            $("#includedContent").load("http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/navbar.html");
        });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
</head>
  
  <body style="background-color:#1E4072;" onload="generateTabs()">
  <!-- START OF NAVIGATION BAR -->
  
      <div id="includedContent"></div>
    <!-- END OF NAVIGATION BAR -->
  <!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Membership Renewed successfully.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="list-group" id="memberships-tab" role="tablist"></div><br>
  <div class="form-gap">
      <h4 class="logo ml-4 text-white"> I R O N S K Y <br>  <span> FITNESS </span> </h4>
  </div>
    <br><br>
<div class="container">
    <div style="color:white; font-size:4vw;"><strong>Expired Memberships</strong></div>
    <div class="row"> 
        <div class="col-6 mx-auto" id="clients"><div class="list-group" id="list-tab" role="tablist"> </div></div>
        <div class="col-6 mx-auto" id="details"><div class="tab-content" id="nav-tabContent"></div></div>
    </div>
</div>
      <script>
      function generateTabs(){
        var php_var = <?php echo json_encode($memberships); ?>;
        var obj=php_var;
        var i=0;
        obj.forEach(function(obj) {
         //Dynamically Create div for customer whose membership is expired.
        var expiredClient = document.createElement('div');
         
        if(i==0){
            expiredClient.className = 'list-group-item list-group-item-action active';
        }else{
            expiredClient.className = 'list-group-item list-group-item-action';
        }
      expiredClient.id = i;
      expiredClient.setAttribute('data-toggle','list');
      expiredClient.setAttribute('role','tab');
      expiredClient.setAttribute('aria-controls','tab');
      expiredClient.setAttribute('style','text-align:center; font-size:3vw;');
      expiredClient.innerHTML=obj.customerName+" "+obj.customerSurname;
      var hreference="#inner";
      hreference+=i;
      expiredClient.setAttribute('href',hreference);
      
      console.log(hreference);
  
    //Dynamically Create div for details of expired membership.
    var innerDiv = document.createElement('div');
    var innerName="inner"+i;
    innerDiv.id=innerName;
    if(i==0)
    innerDiv.className = 'tab-pane fade in active show';
    else
      innerDiv.className = 'tab-pane fade';
      
    innerDiv.setAttribute('role','tabpanel');
    innerDiv.setAttribute('aria-labelledby',expiredClient.id);
    var h5Tag = document.createElement('h5');
    h5Tag.setAttribute('class','text text-white');
    var strongTag = document.createElement('strong');
    var spanTag = document.createElement('span');
    var buttonTag = document.createElement('button')
    buttonTag.setAttribute('type','submit');
    buttonTag.setAttribute('class','btn btn-warning btn-lg float-right');
     buttonTag.setAttribute('width','100%');
    buttonTag.setAttribute('data-toggle','modal');
    buttonTag.setAttribute('data-target','#successModal');
    buttonTag.innerHTML="Renew";
    strongTag.innerHTML="EXPIRED IN:<br>";
    spanTag.innerHTML=obj.exp_date+"<br><br>";
    h5Tag.appendChild(strongTag);
    h5Tag.appendChild(spanTag);
    
    h5Tag.appendChild(document.getElementById('memberships-tab'));
    //div class="list-group" id="memberships-tab" role="tablist">
    //  <a class="list-group-item list-group-item-action active" id="1" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Unlimited 3 Months</a>
    var membershipsDiv=document.createElement('div');
    membershipsDiv.setAttribute('class','list-group');
    var clientchoices="memberships-tab-of-client-"+i;
    membershipsDiv.setAttribute('id',clientchoices);
    membershipsDiv.setAttribute('role','tablist');
    for(var j=1;j<11;j++){
    var innermembershipsDiv=document.createElement('div');
     innermembershipsDiv.setAttribute('class','list-group-item list-group-item-action');
     innermembershipsDiv.setAttribute('data-toggle','list');
     innermembershipsDiv.setAttribute('role','tab');
     innermembershipsDiv.setAttribute('style','text-align:center; font-size:3vw;')
        switch(j) {
        case 1:
          innermembershipsDiv.innerHTML="Unlimited 3 Months";
        break;
        case 2:
        innermembershipsDiv.innerHTML="3 Sessions / Week 3 Months";
        break;
        case 3:
        innermembershipsDiv.innerHTML="Open Gym 3 Months";
        break;
        case 4:
       innermembershipsDiv.innerHTML="Grow Strong 3 Months";
        case 5:
        innermembershipsDiv.innerHTML="We Move 3 Months";
        break;
        case 6:
        innermembershipsDiv.innerHTML="Unlimited";
        case 7:
       innermembershipsDiv.innerHTML="3 Sessions / Week";
        break;
        case 8:
        innermembershipsDiv.innerHTML="Open Gym";
        case 9:
        innermembershipsDiv.innerHTML="Grow Strong";
        break;
        case 10:
        innermembershipsDiv.innerHTML="We Move";
        break;
      default:
        // Do nothing
        break;
    }
     membershipsDiv.appendChild(innermembershipsDiv);
  }
    h5Tag.appendChild(membershipsDiv);
    h5Tag.appendChild(buttonTag);  
    innerDiv.appendChild(h5Tag);
     
    //Append customer tab to navigationbar and corresponding detatails to details div.
    document.getElementById('nav-tabContent').appendChild(innerDiv);
    document.getElementById('list-tab').appendChild(expiredClient);
    i++;
   });
   } 
      </script>

  </body>
