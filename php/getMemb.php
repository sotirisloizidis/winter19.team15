<?php

    include 'connectDB.php';
    $sql="SELECT Type FROM Membership_Types";
    mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
    }
    echo json_encode($rows);
    $conn->close();
?>