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

$sql="INSERT INTO Customer (Name,Address,Telephone,Email,Password) VALUES ('$name','$surname','$address','$tele','$email','$pass')";
mysqli_query($conn,$sql);

$conn->close();
?>
