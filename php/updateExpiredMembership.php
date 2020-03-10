<?php
include 'connectDB.php';
var_dump ("hehehehehhe");
$UPDATEDCUSTOMERS=($_POST["updatedCustomers"]);
for($i=0;$i<count($UPDATEDCUSTOMERS);$i++){
    //$sql="UPDATE Memberships SET ExpirationDate=ExpirationDate+ 1 or 3 months Type=newType WHERE CustomerID=updatedCustomer" ;
    //mysqli_query($conn,$sql);
    echo json_encode($UPDATEDCUSTOMERS[$i]);
}
$conn->close(); 
?>