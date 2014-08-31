<!-- Anfang Wrapper -->
<div class="content_usersettings_wrapper">
    <!-- Anfang Header -->
    <div class="usersettings_header">
        <div class="userstettings_h1">
            <h1>Benutzereinstellungen</h1>
        </div>
    </div>
    <!-- Ende Header -->
    <!-- Anfang eines Inhaltelements -->
    <div class="usersettings_content">
        <div class="usersettings_content_left">
            <div class="user_content">
                <p><label>Name:</label>Früh</p>
                <p><label>Vorname:</label>Max</p>
                <p><label>e-Mail:</label>max@frueh.ch</p>
            </div>
        </div>
        <div class="user_pic">
            <img src="./images/avatars/avatar1.png">
        </div>
        <div class="usersettings_content_tick">
            <a href="#"><img src="./icons/arrow_down.png"></a>
        </div>
    </div>
    <!-- Ende eines Inhaltelements -->
    <!-- Anfang eines Inhaltelements -->
    <div class="usersettings_content">
        <div class="usersettings_content_left">
            <h3>Passwort ändern</h3>
            <div class="user_content">
                <label>altes Passwort:</label><input type="password" name="old_password" required>
                <p><label>neues Passwort:</label><input type="password" name="new_password" required></p>
                <p><label>neues Passwort wiederholen:</label><input type="password" name="new_password2" required></p>
            </div>
        </div>
        <div class="user_save">
            <a class="button green save" href="#"><strong>Speichern</strong></a>
        </div>
        <div class="usersettings_content_tick">
            <a href="#"><img src="./icons/arrow_down.png"></a>
        </div>
    </div>
    <!-- Ende eines Inhaltelements -->
    <!-- Anfang eines Inhaltelements -->
    <div class="usersettings_content">
        <div class="usersettings_content_left">
            <h3>Theme ändern</h3>
            <select id = "theme">
                <option value = "eigenesTheme">eigenes Theme</option>
                <option value = "office">Office</option>
                <option value = "blueOcean">Blue Ocean</option>
            </select>
            <input type="color" name="color" value="#339911">
            <input type="text" name="theme_name" value="Name des Themes">
        </div>
        <div class="user_save">
            <a class="button green save" href="#"><strong>Speichern</strong></a>
        </div>
        <div class="usersettings_content_tick">
            <a href="#"><img src="./icons/arrow_down.png"></a>
        </div>
    </div>
    <!-- Ende eines Inhaltelements -->
    <!-- Anfang eines Inhaltelements -->
    <div class="usersettings_content">
        <div class="usersettings_content_left">
            <h3>Sprache</h3>
            <select id = "language">
                <option value = "de">Deutsch</option>
                <option value = "fr">Französisch</option>
                <option value = "en">English</option>
            </select>
            <a class="button gray language" href="#"><strong>Sprache anpassen</strong></a>
        </div>
        <div class="user_save">
            <a class="button green save" href="#"><strong>Speichern</strong></a>
        </div>
        <div class="usersettings_content_tick">
            <a href="#"><img src="./icons/arrow_down.png"></a>
        </div>
    </div>
    <!-- Ende eines Inhaltelements -->
    <!-- Anfang eines Inhaltelements -->
    <div class="usersettings_content">
        <div class="usersettings_content_left">
            <h3>Sucheinstellungen</h3>
            <fieldset>
                <legend>Sortierung Datum</legend>
                <p><input type = "radio" name = "date_sort" id = "up" value = "up" checked = "checked" />aufsteigend</p>
                <p><input type = "radio" name = "date_sort" id = "down" value = "down" />absteigend</p>
            </fieldset>
            <fieldset>
                <legend>Sortierung Prioritäten</legend>
                <p><input type = "radio" name = "prio_sort" id = "up" value = "up" checked = "checked" />aufsteigend</p>
                <p><input type = "radio" name = "prio_sort" id = "down" value = "down" />absteigend</p>
            </fieldset>
            <fieldset>
                <legend>Einstellungen mit anzeigen</legend>
                <p><input type = "radio" name = "settings" id = "yes" value = "ja" checked = "checked" />Ja</p>
                <p><input type = "radio" name = "settings" id = "no" value = "nein" />Nein</p>
            </fieldset>
            <label>Anzahl Suchergebnisse:</label><input type="number" min="5" max="50" step="5" value="10" name="search_results">
        </div>
        <div class="user_save">
            <a class="button green save" href="#"><strong>Speichern</strong></a>
        </div>
        <div class="usersettings_content_tick">
            <a href="#"><img src="./icons/arrow_down.png"></a>
        </div>
    </div>
    <!-- Ende eines Inhaltelements -->
</div>
<!-- Ende des Wrappers -->