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

$name=$_POST["Name"];
$surname=$_POST["Surname"];
$address=$_POST["Address"];
$tele=$_POST["Phone"];
$email=$_POST["Email"];
$pass=1234;

$sql="INSERT INTO Customer (Name,Surname,Address,Telephone,Email,Password) VALUES ('$name','$surname','$address','$tele','$email','$pass')";
mysqli_query($conn,$sql);
$conn->close();

$subject='Account Activation';
$message='Hello' . $name 'Your Account has been activated. Your username is ' . $email . 'and your password is ' . $pass . ' Welcome to ironsky';
$headers = "From: ironsky";
mail($email,$subject,$message,$headers);

header('Location: http://cproject.in.cs.ucy.ac.cy/ironsky/Mike/mainTrainer.html'); 
?>
