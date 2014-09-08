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
        $ausgabe = "(Montag ";
        $ausgabe .= $dates[0];
        $ausgabe .= " - Sonntag ";
        $ausgabe .= $dates[1];
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
                $dayStart = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d"),  date("Y")));
                $dayEnd = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")+6,  date("Y")));
                break;
            case "2";
                $dayStart = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")-1,  date("Y")));
                $dayEnd = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")+5,  date("Y")));
                break;
            case "3";
                $dayStart = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")-2,  date("Y")));
                $dayEnd = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")+4,  date("Y")));
                break;
            case "4";
                $dayStart = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")-3,  date("Y")));
                $dayEnd = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")+3,  date("Y")));
                break;
            case "5";
                $dayStart = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")-4,  date("Y")));
                $dayEnd = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")+2,  date("Y")));
                break;
            case "6";
                $dayStart = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")-5,  date("Y")));
                $dayEnd = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")+1,  date("Y")));
                break;
            case "7";
                $dayStart = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d")-6,  date("Y")));
                $dayEnd = date("d.m.Y",mktime(0, 0, 0, date("m"), date("d"),  date("Y")));
                break;
        }
        return array($dayStart, $dayEnd);
    }
?>