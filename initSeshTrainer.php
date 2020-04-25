<?php
    session_start();
    if((!isset($_SESSION['authTrainer']))||(!isset($_SESSION['emailTrainer']))){
        session_start();
        $_SESSION = [];
        session_destroy();
        header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php");
    }
    if(!$_SESSION['authTrainer']){
        session_start();
        $_SESSION = [];
        session_destroy();
        header("Location:http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/sign-in.php");
    }
    
?>