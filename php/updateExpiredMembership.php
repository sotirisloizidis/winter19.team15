<?php
include 'connectDB.php';
$UPDATEDCUSTOMERS=($_POST["updatedCustomers"]);
for($i=0;$i<count($UPDATEDCUSTOMERS);$i++){
    $sql="UPDATE Memberships SET ExpirationDate=ExpirationDate+ 1 or 3 months Type=newType WHERE CustomerID=updatedCustomer" ;
    mysqli_query($conn,$sql);
}
$conn->close(); 
?>