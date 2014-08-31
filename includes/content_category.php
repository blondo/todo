<!-- Anfang Einbinden Button "neue Kategorie" -->
<?php include("content_category_btn.php"); ?>
<?php include("bootstrap.php"); ?>
<!-- Ende Einbinden Button "neue Kategorie" -->
<!-- Anfang Wrapper -->
<div class="category_wrapper">
    <!-- Anfang Header -->
    <div class="category_header">
        <!-- Anfang Listen-Header -->
        <div class="category_list_header">
            <div class="cat_desc"><h2>Bezeichnung</h2></div>
            <div class="cat_create_d"><h2>Erstellt am</h2></div>
            <div class="cat_create"><h2>Erstellt von</h2></div>
            <div class="cat_edit"><h2>bearbeiten</h2></div>
            <div class="cat_status"><h2>Status</h2></div>
        </div>
        <!-- Ende Listen-Header -->
    </div>
    <!-- Ende Header -->
    <!-- Anfang item -->
    <div class="category_item">
        <?php
            foreach($categories as $category)
            {
                echo '<div class="category_list_item">';
                    echo '<div class="cat_desc">'.$category['name'].'</div>';
                    echo '<div class="cat_create_d">'.$category['create_date'].'</div>';
                    echo '<div class="cat_create">'.$category['creater'].'</div>';
                    echo '<div class="cat_edit"><a href="#"><img src="./icons/pencil.png"></a></div>';
                    echo '<div class="cat_status"><a href="#">';
                        if($category['status']==1){
                            echo '<img src="./icons/bulb_on.png">';
                        }
                        else
                        {
                            echo '<img src="./icons/bulb_off.png">';
                        }
                    echo '</a></div>';
                echo '</div>';
            }
        ?>
    </div>
    <!-- Ende Item -->

</div>
<!-- Ende Wrapper -->