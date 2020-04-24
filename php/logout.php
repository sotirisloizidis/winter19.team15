<?php
    session_start();
    $_SESSION = [];
    session_destroy();
    
    header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php");
?>