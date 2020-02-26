<?php

   include 'connectDB.php';
   if(isset($_POST['day'])){
      $day= $_POST['day'];
  }
  if(isset($_POST['datediff'])){
    $diff= $_POST['datediff'];
  }

  session_start();
  $mail=$_SESSION["email"];

  $sql="SELECT ClassID FROM Enrolled Where Date=DATE_ADD(CURDATE(),INTERVAL ".$diff." DAY) AND Username='".$mail."'";
  mysqli_query($conn,$sql);
  $result = $conn->query($sql);
  $rows = array();
  while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
  }

  echo json_encode($rows);
  $conn->close();
?>
