<?php
include 'connectDB.php';
$positionsR=($_POST["positionsR"]);
for($i=0;$i<count($positionsR);$i++){
    $sql="DELETE FROM ClassV1 WHERE ClassIndex='$positionsR[$i]'" ;
    mysqli_query($conn,$sql);
}
$conn->close(); 
?>