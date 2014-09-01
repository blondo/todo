<?php
    //include("./includes/bootstrap.php");
    include('bootstrap.php');
    /////////////////////////////////////////////////////////////////////////////////////////////////
    //
    // Name: filterTasks
    // Beschreibung: Filtert die Tasks gemäss den Parametern
    //
    /////////////////////////////////////////////////////////////////////////////////////////////////
    //function filterTask()
    //{
        $new_tasks = array();
        foreach($tasks as $task){
            if($task['category'] == $_SESSION['last_cat'] AND $task['priority'] == $_SESSION['last_prio'])
            {
                $new_tasks[] = array(
                    'category' => $task['category'],
                    'description' => $task['description'],
                    'date_due' => $task['date_due'],
                    'priority' => $task['priority'],
                    'officer' => $task['officer']
                );
            }
        }
    //}


?>