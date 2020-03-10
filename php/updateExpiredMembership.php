<?php
include 'connectDB.php';
console.log("Message here");
var_dump ("hehehehehhe");
$UPDATEDCUSTOMERS=($_POST["updatedCustomers"]);
print_r($UPDATEDCUSTOMERS);
$cid="917309";
$t="opas";   
//echo json_encode($UPDATEDCUSTOMERS[$i]);
for($i=0;$i<count($UPDATEDCUSTOMERS);$i+=2){
    //$sql="UPDATE Memberships SET ExpirationDate=DATE_ADD(month, 3, ExpirationDate) ,Type=".$UPDATEDCUSTOMERS[$i+1]." WHERE CustomerID=".$UPDATEDCUSTOMERS[$i];
    $sql="INSERT INTO Memberships (CustomerID,ExpirationDate,Type) VALUES ('$cid','CURDATE()','$t')";
    mysqli_query($conn,$sql);
    
}
$conn->close(); 
?>