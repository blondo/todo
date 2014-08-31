<?php
    $content_header_h1='';
    $content_header_h2='';
    $content_header_add_class="";
    switch($_SESSION['last_site']){
        case "content_today":
            $content_header_h1="Heute";
            $content_header_h2='('.date("l, d.m.Y").')';
            break;
        case "content_week":
            $content_header_h1='Woche '.date("W");
            $content_header_h2= weekDays();
            $content_header_add_class="weekh";
            break;
        case "content_without_date":
            $content_header_h1="Ohne Datum";
            $content_header_h2="";
            $content_header_add_class="without_date";
            break;
        case "content_completed":
            $content_header_h1="Erledigte";
            $content_header_h2="";
            break;
        case "content_overdue":
            $content_header_h1="Überfällig";
            $content_header_h2="";
            break;
    }
    echo '<div class="today_h1 '.$content_header_add_class.'">';
    echo '   <h1>'.$content_header_h1.'</h1>';
    echo '</div>';
    echo '<div class="today_h2">';
    echo $content_header_h2;
    echo '</div>';
?>