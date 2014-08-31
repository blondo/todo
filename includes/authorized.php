<?php
    session_start();
    if ( $_POST['identity'] != "" AND $_POST['password'] != "" /*AND $_SESSION['logged_in']!=TRUE*/)
    {
        // Kontrolle, ob Benutzername und Kennwort vorhanden
        // diese werden i.d.R. aus Datenbank ausgelesen
        if (
            $_POST['identity'] == "admin"
            AND
            $_POST['password'] == "1234"
        )
        {
            $_SESSION['identity'] = $_POST['identity'];
            $_SESSION['logged_in'] = true;
            //echo "<b>einloggen erfolgreich</b>";
            header("Location: ../index.php");
        }
        else
        {
            $_SESSION['logged_in'] = false;
            header("Location: ../login.php");
        }
    }
?>