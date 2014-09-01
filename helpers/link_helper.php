<?php
    $link='';
    if($_SESSION['last_cat']!='')
    {
        $link .= '&cat='.$_SESSION['last_cat'];
    }
    if($_SESSION['last_prio']!='')
    {
        $link .= '&prio='.$_SESSION['last_prio'];
    }
    $_SESSION['link']= $link;
?>