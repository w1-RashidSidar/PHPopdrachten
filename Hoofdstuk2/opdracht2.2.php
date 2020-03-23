<?php
/**
 * User: Naam
 * Date: Date
 * Time: 12:06 PM
 * File: index.php
 */

$text1 = ' Hallo ';
$text2 = ' een makkelijke taal ';
$text3 = " toch zo'n makkelijke taal ";
$text4 = ' wat is ';
$text5 = ' PHP ';
$text6 = ' Nooit gedacht dat ';
$text7 = ' De installatie is best ingewikkeld ';
$text8 = ' Fijn ';
$text9 = ' ? ';
$text10 = '. ';
$text11 = ', ';
$text12 = '<br>';
$text13 = ' is ';
$text14 = 'Vind je niet ';
$text15 = ' toch ';

?>

<!DOCTYPE html>

<html lang="en">

    <!-- start van de head -->
    <head>
        <!-- declaratie van de tekenset -->
        <meta charset="utf-8">
        <!-- omschrijving van de website -->
        <meta name="description" content="opdracht A">
        <!-- keywords van de website -->
        <meta name="keywords" content="keyword 1, keyword 2">
        <!-- koppeling naar CSS bestand -->
        <link type="text/css" rel="stylesheet" href="../CSS/Style.css">
        <title>
            Opdracht 2.2
        </title>
    </head>

    <body>
    <h2>
        Taak 2
    </h2>
    <?php
echo               "<p>" .
                        $text1 . $text11 . $text4 . $text5 . $text15 . $text2.$text10 . $text12.
                        $text7.$text10 .$text8 .$text15.$text9 .$text12.
                        $text6. $text5 .$text3. $text13.$text10.
                   "</p>"

    ?>
    <br>
    <h2>
        Taak 3
    </h2>
    <?php
    echo
                    "<p>".
                        $text1 ." " .$text11 . $text12.
                        $text8 . $text15 . "dat" . $text5 . "zo'n makkelijke taal" .$text13.$text10. $text12.
                        $text7.$text10 . $text14 . $text9 .
                    "</p>"
    ?>
    <a href="../index.php">Terug</a>
    </body>
</html>


