<?php
  include 'connectDB.php';

     if(isset($_POST['id'])){
        $cid= $_POST['id'];
    }
    session_start();
	$mail=$_SESSION["email"];
    
    $sql="SELECT Username FROM Enrolled WHERE ClassID=".$cid;
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result)) {
        if($r['Username']==$mail){ 
          echo (-1);
          $conn->close();
          exit();
        }
    }
    $sql="SELECT Number_of_available FROM ClassV1 WHERE ClassID=".$cid;
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result)) {
        if($r==0){
            echo(-2);
            $conn->close();
            exit();
        }
        $numplaces=$r['Number_of_available']-1;
    }
    $sql="INSERT INTO Enrolled VALUES ('".$mail."',".$cid.")";
    if (mysqli_query($conn, $sql)){  
    $sql="UPDATE ClassV1 SET Number_of_available=".$numplaces." WHERE ClassID=".$cid;
        if (!mysqli_query($conn, $sql)){
            echo(-3);
            $conn->close();
            exit();
        }
        echo(1);   
    }else{
        echo(0);
    }
    $conn->close();
?>