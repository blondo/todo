<?php
    /**
     * View-Helper: Hier werden verschiedene Funktionen, welche sich rund um die Ansicht drehen
     * ausgeführt.
     *
     * @author      Manuel Hertach
     * @copyright   2014 Manuel Hertach
     *
     * @version     1.0
     */



    /**
     * view_list
     * Gibt die Liste der Tasks aus
     *
     * Bootstrap muss includiert sein!!!
     *
     */
    function view_list($new_tasks){
        include('bootstrap.php');
        foreach($new_tasks as $task)
        {
            echo '<div class="today_content">';
                echo '<!-- Anfang Linker-Inhalt -->';
                echo '<div class="today_content_left">';
                    echo $task['description'];
                echo '</div>';
                echo '<!-- Ende Linker-Inhalt -->';
            echo '<!-- Anfang Rechter-Inhalt -->';
            echo '<div class="today_content_right">';
                echo '<div class="today_content_right_header">';
                    //echo '<h3>'.categoryName($task['category']).'</h3>';
                    echo '<h3>'.$categories[$task['category']]['name'].'</h3>';
                    //echo '<h3>'.$task['category'].'</h3>';
                echo '</div>';
                echo '<!-- Anfang Optionen -->';
                echo '<div class="today_content_right_options">';
                    echo '<ul>';
                        echo '<li><a href="#"><img src="./icons/arrow_down.png"></a></li>';
                        echo '<li><a href="../index.php?content=content_newtask_form"><img src="./icons/pen.png"></a></li>';
                        echo '<li><a href="#"><img src="./icons/recyclebin_empty.png"></a></li>';
                    echo '</ul>';
                echo '</div>';
                echo '<!-- Ende Optionen -->';
            echo '</div>';
            echo '<!-- Ende Rechter-Inhalt -->';
            echo '<!-- Anfang Abschliessen-Hacken -->';
            echo '<div class="today_content_tick">';
                echo '<a href="#"><img src="./icons/tick.png"></a>';
            echo '</div>';
            echo '<!-- Ende Abschliessen-Hacken -->';
            echo '</div>';
        }
    }
?>