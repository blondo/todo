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
    $query='';
    if(isset($_SESSION['last_cat']) && $_SESSION['last_cat']!='')
    {
        $query .= '$task[\'category\'] ==  '.$last_cat;
        if($last_prio!="")
        {
            $query .= ' && ';
        }
    }
    else
    {
        $query .='';
    }
    if(isset($_SESSION['last_prio']) && $_SESSION['last_prio']!='')
    {
        $query .= '$task[\'priority\'] == '.$last_prio;
    }
    else
    {

    }
    $new_tasks = array();
    foreach($tasks as $task){

        echo $query.'<br>';
        if($query)
        //if($task['category']==$last_cat && $task['priority']==$last_prio)
        {
            $new_tasks[] = array(
                'category' => $task['category'],
                'description' => $task['description'],
                'date_due' => $task['date_due'],
                'priority' => $task['priority'],
                'officer' => $task['officer']
            );
        }
        //echo $query_cat.$operator.$query_prio.'<br>';
    }
?>