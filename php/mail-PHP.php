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

$email=$_POST["Email"];

if(($email=="")){
     header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/testGreg/reset.php");
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
    header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/testGreg/reset.php");
    return true;
}

$conn->close();
?>