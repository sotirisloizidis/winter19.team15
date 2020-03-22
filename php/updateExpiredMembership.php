<?php

include 'connectDB.php';
$id=$_POST["customer_id"];
$membership=$_POST["customer_membership"];

$sql="SELECT Duration FROM Membership_Types WHERE Type='$membership'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$duration=$row['Duration'];

$sql="SELECT ExpirationDate FROM Memberships WHERE CustomerID=".$id;
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$exp=$row['ExpirationDate'];



$up="UPDATE Memberships SET Type='$membership',ExpirationDate=DATE_ADD('$exp',INTERVAL ".$duration." MONTH) WHERE CustomerID=".$id;
mysqli_query($conn,$up);

mysqli_close($conn);
?>