<!-- Anfang Einbinden Button "neue Task" -->
<?php include("content_newtask_btn.php"); ?>
<!-- Ende Einbinden Button "neuer Task" -->
<!-- Anfang Wrapper -->
<div class="today_wrapper">
    <!-- Anfang Today-Header -->
    <div class="today_header">
        <?php include ("includes/content_header.php"); ?>
    </div>
    <!-- Ende Today-Header -->
    <!-- Anfang Today-Inhalt -->
    <?php
        $new_tasks = filterDate($tasks);
        view_list($new_tasks);
    ?>
    <!-- Ende Today-Inhalt -->
</div>
<!-- Ende Wrapper -->