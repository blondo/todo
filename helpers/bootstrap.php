<?php
    $categories = array(
        '1' => array( 'name'=> "HTML", 'create_date'=>"13.04.2014", 'creater'=>"MHE", 'status'=>1),
        '2' => array('name'=> "CSS", 'create_date'=>"20.06.2014", 'creater'=>"MHE", 'status'=>1),
        '3' => array('name'=> "JavaScript", 'create_date'=>"26.07.2014", 'creater'=>"MHE", 'status'=>0)
    );

    $priorities = array(
        '1' => array('name'=> "sehr hoch", 'create_date'=>"03.04.2014", 'creater'=>"MHE", 'status'=>1),
        '2' => array('name'=> "hoch", 'create_date'=>"20.06.2014", 'creater'=>"MHE", 'status'=>1),
        '3' => array('name'=> "mittel", 'create_date'=>"26.07.2014", 'creater'=>"MHE", 'status'=>1),
        '4' => array('name'=> "klein", 'create_date'=>"20.06.2014", 'creater'=>"MHE", 'status'=>1),
        '5' => array('name'=> "ohne", 'create_date'=>"26.07.2014", 'creater'=>"MHE", 'status'=>1)
    );

    $tasks = array(
        array(
            'id'=>1,
            'category'=>2,
            'description'=>'CSS: Er hörte leise Schritte hinter sich. Das bedeutete nichts Gutes. Wer würde ihm schon folgen, spät in der Nacht und dazu noch in dieser engen Gasse mitten im übel beleumundeten Hafenviertel? Gerade jetzt, wo er das Ding seines Lebens gedreht hatte und mit der Beute verschwinden wollte! Hatte einer seiner zahllosen Kollegen dieselbe Idee gehabt, ihn beobachtet und abgewartet, um ihn nun um die Früchte seiner Arbeit zu erleichtern? Oder gehörten die Schritte hinter ihm zu einem der unzähligen Gesetzeshüter dieser Stadt, und die stählerne Acht um seine Handgelenke würde gleich zuschnappen? Er konnte die Aufforderung stehen zu bleiben schon hören. Gehetzt sah er sich um. Plötzlich erblickte er den schmalen Durchgang. Blitzartig drehte er sich nach rechts und verschwand zwischen den beiden Gebäuden.',
            'date_due'=>"  1410645600",
            'priority' => 0,
            'officer'=>'Hans Muster',
            'status' => 0),
        array(
            'id'=>2,
            'category'=>1,
            'description'=>'HTML: Es gibt im Moment in diese Mannschaft, oh, einige Spieler vergessen ihnen Profi was sie sind. Ich lese nicht sehr viele Zeitungen, aber ich habe gehört viele Situationen. Erstens: wir haben nicht offensiv gespielt. Es gibt keine deutsche Mannschaft spielt offensiv und die Name offensiv wie Bayern. Letzte Spiel hatten wir in Platz drei Spitzen: Elber, Jancka und dann Zickler.',
            'date_due'=>" 1410739200",
            'priority' => 2,
            'officer'=>'Max Früh',
            'status' => 0),
        array(
            'id'=>3,
            'category'=>2,
            'description'=>'CSS: Es gibt im Moment in diese Mannschaft, oh, einige Spieler vergessen ihnen Profi was sie sind. Ich lese nicht sehr viele Zeitungen, aber ich habe gehört viele Situationen. Erstens: wir haben nicht offensiv gespielt. Es gibt keine deutsche Mannschaft spielt offensiv und die Name offensiv wie Bayern. Letzte Spiel hatten wir in Platz drei Spitzen: Elber, Jancka und dann Zickler.',
            'date_due'=>" 1410739200",
            'priority' => 2,
            'officer'=>'Max Früh',
            'status' => 1),
        array(
            'id'=>4,
            'category'=>1,
            'description'=>'HTML: Es gibt im Moment in diese Mannschaft, oh, einige Spieler vergessen ihnen Profi was sie sind. Ich lese nicht sehr viele Zeitungen, aber ich habe gehört viele Situationen. Erstens: wir haben nicht offensiv gespielt. Es gibt keine deutsche Mannschaft spielt offensiv und die Name offensiv wie Bayern. Letzte Spiel hatten wir in Platz drei Spitzen: Elber, Jancka und dann Zickler.',
            'date_due'=>" 1410220800",
            'priority' => 2,
            'officer'=>'Max Früh',
            'status' => 0),
        array(
            'id'=>5,
            'category'=>3,
            'description'=>'JS: Überall dieselbe alte Leier. Das Layout ist fertig, der Text lässt auf sich warten. Damit das Layout nun nicht nackt im Raume steht und sich klein und leer vorkommt, springe ich ein: der Blindtext. Genau zu diesem Zwecke erschaffen, immer im Schatten meines großen Bruders »Lorem Ipsum«, freue ich mich jedes Mal, wenn Sie ein paar Zeilen lesen. Denn esse est percipi - Sein ist wahrgenommen werden. Und weil Sie nun schon die Güte haben, mich ein paar weitere Sätze lang zu begleiten, möchte ich diese Gelegenheit nutzen, Ihnen nicht nur als Lückenfüller zu dienen, sondern auf etwas hinzuweisen, das es ebenso verdient wahrgenommen zu werden: Webstandards nämlich.',
            'date_due'=>" 1410393600",
            'priority' => 3,
            'officer'=>'Urs Schuler',
            'status' => 0)
    );
?>