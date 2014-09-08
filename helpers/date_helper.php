<?php
    /**
     * Date-Helper: Hier werden verschiedene Funktionen, welche sich rund um das Datum drehen
     * ausgeführt.
     *
     * @author      Manuel Hertach
     * @copyright   2014 Manuel Hertach
     *
     * @version     1.0
     */


    /**
     * weekDays
     * Diese Funktion gibt folgendes aus: (Montag 28.07.2014 - Sonntag 03.08.2014)
     *
     * @return      string   erstellt oben genannten String und gibt diesen zurück
     */
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

    /**
     * weekDate
     * Diese Funktion gibt das Datum vom Montag und Sonntag der aktuellen Woche zurück
     *
     * @return      string      $dayStart -> Montag der aktuellen Woche
     * @return      string      $dayEnd   -> Sonntag der aktuellen Woche
     */
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

    /**
     * dayGerman
     * Wandelt den Tag in Deutsch um
     *
     * @return      string      gibt den Tag in Deutsch zurück
     */
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