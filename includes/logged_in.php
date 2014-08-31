<?php
    //session_start();
    //var_dump($_SESSION);
    if($_SESSION['logged_in']!=TRUE){
        $_SESSION['logged_in'] = false;
        header("Location: login.php");
    }
?>