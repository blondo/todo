<?php
    /**
     * Erstellung der Filter für die Tasks
     *
     * @author      Manuel Hertach
     * @copyright   2014 Manuel Hertach
     *
     * @version     1.0
     */
    include('bootstrap.php');

    /**
     * filterDate
     * Filtert die Tasks gemäss dem Header (Heute, Woche, ohne Datum etc.)
     *
     * @return      array   neues gefiltertes Array
     */
    function filterDate($tasks){
        $new_tasks = array();
        $last_content = $_SESSION['last_site'];
        $dates = weekDate();
        foreach($tasks as $task){
            switch($last_content){
                case 'content_today':
                    if($task['date_due']==$dates['1'] && $task['status']==0){
                        $new_tasks[] = write_newTask($task);
                        $new_tasks = filterTask($new_tasks);
                    }
                    break;
                case 'content_week':
                    if($task['date_due']>=$dates['0'] && $task['date_due']<= $dates['1'] && $task['status']==0){
                        $new_tasks[] = write_newTask($task);
                        $new_tasks = filterTask($new_tasks);
                    }
                    break;
                case 'content_without_date':
                    if($task['date_due']=='' && $task['status']==0){
                        $new_tasks[] = write_newTask($task);
                        $new_tasks = filterTask($new_tasks);
                    }
                    break;
                case 'content_completed':
                    if($task['status']==1){
                        $new_tasks[] = write_newTask($task);
                        $new_tasks = filterTask($new_tasks);
                    }
                    break;
                case 'content_overdue':
                    if($task['date_due']>=$dates['1'] && $task['status']==0){
                        $new_tasks[] = write_newTask($task);
                        $new_tasks = filterTask($new_tasks);
                    }
                    break;
            }
        }
        return $new_tasks;
    }

    /**
     * filterTasks
     * Filtert die Tasks gemäss den Parametern
     *
     * @return      array   neues gefiltertes Array
     */
    function filterTask($tasks){
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
        return $new_tasks;
    }

    /**
     * write_newTask
     * Gibt ein neues Array mit einem einzelnen Tasks zurück
     *
     * @return      array   ein einzelner Task in einem Array
     */
    function write_newTask($task){
        $new_tasks['category'] = $task['category'];
        $new_tasks['description'] = $task['description'];
        $new_tasks['date_due'] = $task['date_due'];
        $new_tasks['priority'] = $task['priority'];
        $new_tasks['officer'] = $task['officer'];

        return $new_tasks;
    }

    /**
     * categoryName
     * Gibt die Kategorie zurück
     *
     * @return      string   Name der Kategorie
     */
    function categoryName($task){

        foreach($categories as $key=>$category)
        {
            if($key == $task){
                $cat = $category['name'];
            }
        }
        return $cat;
    }

    /**
     * filterSearch
     * Filtert die Tasks gemäss den Parametern
     *
     * @return      array   neues gefiltertes Array
     */
    function filterSearch($tasks, $search_txt){
        $new_tasks = array();
        foreach($tasks as $task){
            if($task[''] == $search_txt){
                $new_tasks[] = write_newTask($task);
                break;
            }
        }
        return $new_tasks;
    }
?>