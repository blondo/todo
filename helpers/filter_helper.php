<?php
    //include("./includes/bootstrap.php");
    include('bootstrap.php');
    /////////////////////////////////////////////////////////////////////////////////////////////////
    //
    // Name: filterTasks
    // Beschreibung: Filtert die Tasks gemäss den Parametern
    //
    /////////////////////////////////////////////////////////////////////////////////////////////////

    $last_cat = $_SESSION['last_cat'];
    $last_prio = $_SESSION['last_prio'];
    $new_tasks = array();
    foreach($tasks as $task){

        if(isset($last_cat))
        {
            $query_cat = '$task[\'category\'] == '. $_SESSION['last_cat'];
            if($last_prio!="")
            {
                $operator = ' AND ';
            }
        }
        else
        {
            $query_cat ='';
        }
        if(isset($last_prio))
        {
            $query_prio = '$task[\'priority\'] == '. $_SESSION['last_prio'];
        }
        else
        {

        }
        /*if($query_cat.$operator.$query_prio)
        {
            $new_tasks[] = array(
                'category' => $task['category'],
                'description' => $task['description'],
                'date_due' => $task['date_due'],
                'priority' => $task['priority'],
                'officer' => $task['officer']
            );
        }*/
        echo $query_cat.$operator.$query_prio.'<br>';
    }


?>