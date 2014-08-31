<?php include("bootstrap.php"); ?>
<!-- Start Rechter Inhalt  -->
<!-- Start Info_Point -->
<div class="info_point">
    <!-- Start Info_Point_Header -->
    <div class="info_point_header">
        Kategorien
    </div>
    <!-- Ende Info_Point_Header -->
    <!-- Start Info_Point_Inhalt -->
    <div class="info_point_content">
        <ul>
            <?php
                foreach($categories as $category)
                {
                   echo '<a href="./index.php?'.$_SESSION['last_site'].'&cat='.$category['name'].'&prio='.$_SESSION['last_prio'].'"><li class="link">'.$category['name'].'</li></a>';
                }
            ?>
        </ul>
    </div>
    <!-- Ende Info_Point_Inhalt -->
</div>
<!-- Ende Info_Point -->
<!-- Start Info_Point -->
<div class="info_point">
    <!-- Start Info_Point_Header -->
    <div class="info_point_header">
        Prioritäten
    </div>
    <!-- Ende Info_Point_Header -->
    <!-- Start Info_Point_Inhalt -->
    <div class="info_point_content">
        <ul>
            <?php
            foreach($priorities as $priority)
            {
                echo '<a href="./index.php?'.$_SESSION['last_site'].'&cat='.$_SESSION['last_cat'].'&prio='.$priority['name'].'"><li class="link">'.$priority['name'].'</li></a>';
            }
            ?>
        </ul>
    </div>
    <!-- Ende Info_Point_Inhalt -->
</div>
<!-- Ende Info_Point -->
<!-- Ende Rechter Inhalt -->