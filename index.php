<!doctype html>
<?php
    session_start();
    if (isset($_GET['content'])) {
        $content = strtolower(trim($_GET['content']));
    } else {
        $content = '';
    }
    if (isset($_GET['cat'])) {
        $cat = strtolower(trim($_GET['cat']));
    } else {
        $cat = '';
    }
    if (isset($_GET['prio'])) {
        $prio = strtolower(trim($_GET['prio']));
    } else {
        $prio = '';
    }
    // Gültige Bereiche definieren
    $pages = array(
        "content_category",
        "content_search",
        "content_newtask_form",
        "content_usersettings_form",
        "content_today",
        "content_week",
        "content_without_date",
        "content_completed",
        "content_overdue"
    );

    // Gültigkeit prüfen und ggf Standard setzen
    if ( !in_array( $content, $pages ) )
        $content = "content_today";

    $_SESSION['last_site'] = $content;
    $_SESSION['last_cat'] = $cat;
    $_SESSION['last_prio'] = $prio;
    include( "includes/logged_in.php");
    include( "helpers/date_helper.php");
    //include( "includes/bootstrap.php" );
?>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>ToDo</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Anfang Wrapper -->
<div class="wrapper">
    <!-- Anfang Header -->
    <?php include ("header.php"); ?>
    <!-- Ende Header -->

    <!-- Anfang Inhalt -->
    <div class="content_wrapper">
        <!-- Anfang linker Teil des Inhalts -->
        <div class="content_left">
            <?php
                switch($content){
                    case 'content_category':
                        include('includes/content_category.php');
                        break;
                    case 'content_usersettings_form':
                        include('includes/content_usersettings_form.php');
                        break;
                    case 'content_newtask_form':
                        include('includes/content_newtask_form.php');
                        break;
                    case 'content_search':
                        include('includes/content_search.php');
                        break;
                    default:
                        include( "includes/content_today.php" );
                        break;
                }
            ?>
        </div>
        <!-- Ende linker Teil des Inhalts -->

        <!-- Anfang rechter Teil des Inhalts -->
        <div class="content_right">
            <?php include("includes/content_right.php"); ?>
        </div>
        <!-- Ende rechter Teil des Inhalts -->
    </div>
    <!-- Ende Inhalt -->
</div>
</body>
</html>