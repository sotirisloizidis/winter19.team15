<?php

   include 'connectDB.php';

     if(isset($_POST['day'])){
        $day= $_POST['day'];
    }

    session_start();
	$mail=$_SESSION["email"];
    $sql="SELECT ClassID,ClassName,Description,Hour,Number_of_places,Number_of_available FROM ClassV1 WHERE Day='".$day."'";
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
    }
    echo json_encode($rows);
    $conn->close();
?>
