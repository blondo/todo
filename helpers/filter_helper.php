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
    $lc='';
    $lp='';
    if(isset($_SESSION['last_cat']) && $_SESSION['last_cat']!='')
    {
        $lc='1';
    }
    else
    {
        $lc='0';
    }
    if(isset($_SESSION['last_prio']) && $_SESSION['last_prio']!='')
    {
        $lp='1';
    }
    else
    {
        $lp='0';
    }
    $value = $lc.$lp;
    $new_tasks = array();
    foreach($tasks as $task){
        switch($value){
            case '00':
                $new_tasks[] = write_newTask($task);
                break;
            case '10':
                if($task['category']==$_SESSION['last_cat'])
                {$new_tasks[] = write_newTask($task);}
                break;
            case '01':
                if($task['priority']==$_SESSION['last_prio'])
                {$new_tasks[] = write_newTask($task);}
                break;
            case '11':
                if($task['category']==$last_cat && $task['priority']==$last_prio)
                {$new_tasks[] = write_newTask($task);}
                break;
        }
    }

    function write_newTask($task){
        //var_dump($task);
        $new_tasks['category'] = $task['category'];
        $new_tasks['description'] = $task['description'];
        $new_tasks['date_due'] = $task['date_due'];
        $new_tasks['priority'] = $task['priority'];
        $new_tasks['officer'] = $task['officer'];

        return $new_tasks;
    }
?>