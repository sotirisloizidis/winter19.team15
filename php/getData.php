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
     if(isset($_POST['day'])){
        $day= $_POST['day'];
    }

    session_start();
	$mail=$_SESSION["email"];
    $sql="SELECT ClassID,ClassName,Number_of_places,Number_of_available,Hour,Description FROM ClassV1 WHERE Day='".$day."'";
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
    }
    echo json_encode($rows);
    $conn->close();
?>
