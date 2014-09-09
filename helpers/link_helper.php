<?php
    /**
     * Erstellt die Links
     *
     * @author      Manuel Hertach
     * @copyright   2014 Manuel Hertach
     *
     * @version     1.0
     */
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