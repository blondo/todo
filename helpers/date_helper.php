<?php
    /////////////////////////////////////////////////////////////////////////////////////////////////
    //
    // Name: weekDays
    // Beschreibung: Diese Funktion gibt folgendes aus: (Montag 28.07.2014 - Sonntag 03.08.2014)
    //
    /////////////////////////////////////////////////////////////////////////////////////////////////
    function weekDays()
    {
        $dates = weekDate();
        $ausgabe =  "(".dayGerman(date('w',$dates[0]))." ";
        $ausgabe .= date('d.m.Y',$dates[0]);
        $ausgabe .= " - ".dayGerman(date('w',$dates[1]))." ";
        $ausgabe .= date('d.m.Y',$dates[1]);
        $ausgabe .= ")";
        return($ausgabe);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////
    //
    // Name: weekDate
    // Beschreibung: Diese Funktion gibt das Datum vom Montag und Sonntag der aktuellen Woche
    //               zurück
    //
    /////////////////////////////////////////////////////////////////////////////////////////////////
    function weekDate()
    {
        $dayStart = "";
        $dayEnd = "";
        $dayNow = date("N");
        switch ($dayNow)
        {
            case "1";
                $dayStart = mktime(0, 0, 0, date("m"), date("d"),  date("Y"));
                $dayEnd = mktime(0, 0, 0, date("m"), date("d")+6,  date("Y"));
                break;
            case "2";
                $dayStart = mktime(0, 0, 0, date("m"), date("d")-1,  date("Y"));
                $dayEnd = mktime(0, 0, 0, date("m"), date("d")+5,  date("Y"));
                break;
            case "3";
                $dayStart = mktime(0, 0, 0, date("m"), date("d")-2,  date("Y"));
                $dayEnd = mktime(0, 0, 0, date("m"), date("d")+4,  date("Y"));
                break;
            case "4";
                $dayStart = mktime(0, 0, 0, date("m"), date("d")-3,  date("Y"));
                $dayEnd = mktime(0, 0, 0, date("m"), date("d")+3,  date("Y"));
                break;
            case "5";
                $dayStart = mktime(0, 0, 0, date("m"), date("d")-4,  date("Y"));
                $dayEnd = mktime(0, 0, 0, date("m"), date("d")+2,  date("Y"));
                break;
            case "6";
                $dayStart = mktime(0, 0, 0, date("m"), date("d")-5,  date("Y"));
                $dayEnd = mktime(0, 0, 0, date("m"), date("d")+1,  date("Y"));
                break;
            case "7";
                $dayStart = mktime(0, 0, 0, date("m"), date("d")-6,  date("Y"));
                $dayEnd = mktime(0, 0, 0, date("m"), date("d"),  date("Y"));
                break;
        }
        return array($dayStart, $dayEnd);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////
    //
    // Name: dayGerman
    // Beschreibung: Wandelt den Tag in Deutsch um
    //
    /////////////////////////////////////////////////////////////////////////////////////////////////
    function dayGerman($tag){
        switch ($tag){
            case 1:
                $tagDeutsch = "Montag";
                break;
            case 2:
                $tagDeutsch = "Dienstag";
                break;
            case 3:
                $tagDeutsch = "Mittwoch";
                break;
            case 4:
                $tagDeutsch = "Donnerstag";
                break;
            case 5:
                $tagDeutsch = "Freitag";
                break;
            case 6:
                $tagDeutsch = "Samstag";
                break;
            case 0:
                $tagDeutsch = "Sonntag";
                break;
        }
        return $tagDeutsch;
    }
?>