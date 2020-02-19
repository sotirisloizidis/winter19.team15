<head>
</head>
<body>          
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</body>

<?php
include 'connectDB.php';


$email=$_POST["Email"];
$password=$_POST["Password"];


if(($email=="") || ($password=="") ){
      echo "<script> 
       swal({
  title: 'Email or Password field is empty',
  text: 'The Email or Password field cannot be empty.',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/sign-in.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
     
      </script>";
    //header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/sign-in.php");
    return false;   
}
session_start();
$_SESSION["email"] = $email;
$query = "SELECT * FROM Customer WHERE Email='$email'";
$result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

if (!$result) {
    echo "wrong input";
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}  
  $row = mysqli_fetch_assoc($result);  
  
  if (password_verify($password,$row['Password'])){ 
       header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/main.html");
       return true;
  }else{
        $query2 = "SELECT * FROM Trainer WHERE Email='$email'";
        $result2 = mysqli_query($conn, $query2)  or die("Could not connect database " .mysqli_error($conn));
          
        if (!$result2) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }  
        $row2 = mysqli_fetch_assoc($result2);
        if (password_verify($password, $row2['Password'])){ 
             header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/mainTrainer.html");
             return true;
        }else{
            echo "<script> 
       swal({
  title: 'Password is Invalid',
  text: 'The Email or Password is invalid.',
  type: 'error',

  showConfirmButton: true
}, function(){
      window.location.href = 'http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/sign-in.php';
}); 
     $('.sweet-overlay').css('background-color','#1E4072');
     
      </script>";
            return false;
        }
    }
	
           
$conn->close();   


?>
                                            
