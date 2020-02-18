<?php
include 'connectDB.php';


$email=$_POST["Email"];
$password=$_POST["Password"];


if(($email=="") || ($password=="") ){
      echo "<script> window.location.href='http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/sign-in.php';
      alert('The Email and Password fields cannot be empty');
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
            echo "<script> window.location.href='http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/sign-in.php';
            alert('The Email or Password is incorrect');
            </script>";
            return false;
        }
    }

           
$conn->close();   


?>
                                            