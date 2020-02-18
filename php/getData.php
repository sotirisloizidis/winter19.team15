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
     if(isset($_POST['days'])){
        $day= $_POST['days'];
    }

    session_start();
	$mail=$_SESSION["email"];
    $sql="SELECT Name,Description,Date,Number_Of_Places,Number_Of_Available FROM Class WHERE Date(Date)=(CURDATE()+".$day.")";
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
    }
    echo json_encode($rows);
    /*
    if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "Class_ID: " . $row["Class_ID"]. " - Description: " . $row["Description"]. " -Number_Of_Places" . $row["Number_Of_Places"]. "<br>";
      }
    } else {
         echo "0 results";
    }
    */
?>
