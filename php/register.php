<?php
include 'connectDB.php';

$name=$_POST["Name"];
$surname=$_POST["Surname"];
$address=$_POST["Address"];
$tele=$_POST["Phone"];
$email=$_POST["Email"];

$query = "SELECT * FROM Customer";
$result = mysqli_query($conn, $query)  or die("Could not connect database " .mysqli_error($conn));

while($row = mysqli_fetch_assoc($result)) {
    $emaildb = $row['Email'];
    
    if($email === $emaildb) {
        echo "<script> window.location.href='http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/mainTrainer.html';
      alert('The Email already exists');
      </script>";
        exit();
    }
}


$pass=generateRandomString();
$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql="INSERT INTO Customer (Name,Surname,Address,Telephone,Email,Password) VALUES ('$name','$surname','$address','$tele','$email','$hash')";
mysqli_query($conn,$sql);
$conn->close();

$subject='Account Activation';
$message='Hello ' . $name . '
Your Account has been activated. Your username is: ' . $email . '
and your password is: ' . $pass . '
Welcome to ironsky'.'
We recommend that you change your password';
$headers = "From: ironsky";
mail($email,$subject,$message,$headers);

header('Location: http://cproject.in.cs.ucy.ac.cy/ironsky/GrandMaster/mainTrainer.html'); 

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>
