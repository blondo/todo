    <!-- Anfang oberer Teil des Headers -->
    <div class="header_wrapper">
        <nav>

            <ul>
                <li><a href="index.php?content=content_search">Suche</a></li>
                <li class="drop">
                    <a href="#">Einstellungen</a>

                    <div class="dropdownContain">
                        <div class="dropOut">
                            <div class="triangle"></div>
                            <ul>
                                <li><a href="index.php?content=content_usersettings_form">Benutzereinstellungen</a></li>
                                <li><a href="index.php?content=content_category">Kategorien verwalten</a></li>

                            </ul>
                        </div>
                    </div>

                </li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    <!-- Ende oberer Teil des Headers -->

    <!-- Anfang unterer Teil des Headers -->
    <div class="header_bottom">
        <!-- Anfang Heute -->
        <a href="index.php?content=content_today<?php echo $_SESSION['link'];?>">
            <div class="today">
                <div class="counts">8</div>
                <div class="count_txt">Heute</div>
            </div>
        </a>
        <!-- Ende Heute -->
        <!-- Anfang Woche -->
        <a href="index.php?content=content_week<?php echo $_SESSION['link'];?>">
            <div class="week">
                <div class="counts">36</div>
                <div class="count_txt">Woche</div>
            </div>
        </a>
        <!-- Ende Woche -->
        <!-- Anfang ohneDatum -->
        <a href="index.php?content=content_without_date<?php echo $_SESSION['link'];?>">
            <div class="dateless">
                <div class="counts">13</div>
                <div class="count_txt">ohne Datum</div>
            </div>
        </a>
        <!-- Ende ohneDatum -->
        <!-- Anfang Erledigte -->
        <a href="index.php?content=content_completed<?php echo $_SESSION['link'];?>">
            <div class="finished">

                <div class="count_txt">erledigte</div>
            </div>
        </a>
        <!-- Ende Erledigte -->
        <!-- Anfang Überfällige -->
        <a href="index.php?content=content_overdue<?php echo $_SESSION['link'];?>">
            <div class="overdue">
                <div class="counts">6</div>
                <div class="count_txt">überfällige</div>
            </div>
        </a>
        <!-- Ende Überfällige -->

    </div>
    <!-- Ende unterer Teil des Headers -->
</div>