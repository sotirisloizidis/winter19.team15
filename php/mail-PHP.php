<?php
include 'connectDB.php';

$email=$_POST["Email"];

if(($email=="")){

     echo "<script> window.location.href='http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/reset.php';
      alert('The Email field cannot be empty');
      </script>";
        return false;
}else{
    $query = "SELECT * FROM Customer WHERE Email='$email'";
    $result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        
        exit();
    }
    $row = mysqli_fetch_assoc($result);
    $name= $row['Name'];

    $subject='Password Deactivation';
    $message='Helllo, '. $name. '.
    To change your password press the following link:';
    $headers = "From: ironsky";



    mail($email,$subject,$message,$headers);
    echo "<script> window.location.href='http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/sign-in.php';
      alert('SUCCESS! Email sent successfully');
      </script>";
    return true;
}

$conn->close();
?>