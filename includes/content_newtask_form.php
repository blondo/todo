<!-- Anfang Wrapper -->
<div class="newtask_form_wrapper">
    <!-- Anfang Form -->
    <div class="nt_form_fields">
        <!-- Anfang "Kategorie" -->
        <!-- Select wird aus Datenbank befüllt -->
        <label>Kategorie</label>
        <select id = "category">
            <option value = "HTML">HTML</option>
            <option value = "CSS">CSS</option>
            <option value = "JavaScript">JavaScript</option>
            <option value = "keine">keine</option>
        </select>
        <!-- Ende "Kategorie" -->
        <!-- Anfang "Beschreibung" -->
        <label>Beschreibung</label>
        <textarea rows="3" cols="20">Beschreibung eingeben...</textarea>
        <!-- Ende "Beschreibung" -->
        <!-- Anfang "zur erledigen bis" -->
        <label>Zu erledigen bis:</label>
        <input id="date_due" name="date_due" min="2014-01-01" max="2099-12-31" type="date">
        <!-- Ende "zu erledigen bis" -->
        <!-- Anfang "Prioritäten" -->
        <!-- Select wird aus Datenbank befüllt -->
        <label>Priorität:</label>
        <select id = "priority">
            <option value = "very_high">sehr hoch</option>
            <option value = "high">hoch</option>
            <option value = "middle">mittel</option>
            <option value = "low">klein</option>
            <option value = "without">ohne</option>
        </select>
        <!-- Ende "Prioritäten" -->
        <!-- Anfang "Verantwortlich" -->
        <!-- Select wird aus Datenbank befüllt -->
        <label>Verantwortlich</label>
        <select id = "responsible">
            <option value = "Max_Frueh">Max Früh</option>
            <option value = "Stefan_Jecker">Stefan Jecker</option>
            <option value = "Urs_Schuler">Urs Schuler</option>
            <option value = "Hans_Frei">Hans Frei</option>
            <option value = "Reto_Oberholzer">Reto Oberholzer</option>
        </select>
        <!-- Ende "Verantwortlich" -->
    </div>
    <!-- Anfang TRENNER -->
    <div class="seperator">

    </div>
    <!-- ENDE TRENNER -->
    <!-- Anfang Buttons -->
    <div class="nt_form_buttons">
        <a class="button green save" href="../index.php?content=content_today"><strong>Speichern</strong></a>
        <a class="button red abort" href="../index.php?content=content_today"><strong>Abbrechen</strong></a>
    </div>
    <!-- Ende Buttons -->
</div>
<!-- Ende Wrapper -->