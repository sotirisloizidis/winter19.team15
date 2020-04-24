<?php
    session_start();
    if((!isset($_SESSION['auth']))&&(!isset($_SESSION['email']))){
        session_start();
        $_SESSION = [];
        session_destroy();
        header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php");
    }
    if(!$_SESSION['auth']){
        session_start();
        $_SESSION = [];
        session_destroy();
        header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php");
    }
    
?>