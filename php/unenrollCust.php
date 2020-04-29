<?php
    include 'connectDB.php';
    if(isset($_POST['id'])){
     $cid= $_POST['id'];
    }
    if(isset($_POST['datediff'])){
    $diff= $_POST['datediff'];
    }
    session_start();
    $mail=$_SESSION["email"];
    $sql="SELECT Number_of_available FROM ClassV1 WHERE ClassID=".$cid;
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result)) {
        if($r==0){
            echo(-2);
            $conn->close();
            exit();
        }
        $numplaces=$r['Number_of_available']+1;
    }

    $sql="DELETE FROM Enrolled Where Username='".$mail."' AND ClassID=".$cid." AND Date=DATE_ADD(CURDATE(),INTERVAL ".$diff." DAY)";
    if (mysqli_query($conn, $sql)){
      $sql="UPDATE ClassV1 SET Number_of_available=".$numplaces." WHERE ClassID=".$cid;
      if(mysqli_query($conn,$sql))
        echo(1);
    }else{
      echo(0);
    }
    $conn->close();
?>
