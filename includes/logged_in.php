<?php
    //session_start();
    //var_dump($_SESSION);
    if ( ! isset ( $_SESSION['logged_in'] ) )
    {
        $_SESSION['logged_in'] = FALSE;
        header("Location: login.php");
    }
    else
    {
        if($_SESSION['logged_in']==FALSE){
            //$_SESSION['logged_in'] = false;
            header("Location: login.php");
        }
    }
?>