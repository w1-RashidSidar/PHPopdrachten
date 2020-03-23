<?php
/**
 * User: Naam
 * Date: Date
 * Time: 12:06 PM
 * File: index.php
 */
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
            Opdracht 3.1
        </title>
    </head>
    <body>
        <?php
            $evenement = "Elfstedentocht"; //string
            $evenementFries = "Alvestêdetocht)"; //string
            $afstand = 200; //integer
            $tocht = "schaatstocht"; //string
            $ijssoort = "natuurijs"; //string
            $organisatie = "Koninklijke Vereniging De Friesche Elf Steden."; //string
            $hoofdstad = "Leeuwarden,"; //string
            $land = "Friesland,"; //string
            $aantalKeer = 15; //integer
            $eersteKeer = 1909; //integer
            $maxKeerWinter = 1; //integer

            $verhaal = "De Elfstedentocht (Fries: Alvestêdetocht) is een 200 kilometer
                        lange schaatstocht over natuurijs die wordt georganiseerd door
                        de Koninklijke Vereniging De Friesche Elf Steden. Leeuwarden,
                        de hoofdstad van Friesland, is start- en aankomstplaats. De
                        Elfstedentocht is inmiddels 15 maal verreden en werd voor het
                        eerst in 1909 gereden en wordt maximaal 1 keer per winter
                        gehouden. ";
        ?>

        <p>
            <?php
                echo
                    "<p>".
                        "De " .$evenement. " (Fries: " .$evenementFries. " is een " .$afstand. " kilometer lange "
                        .$tocht. " over " .$ijssoort. " die wordt georganiseerd door de " .$organisatie." "
                        .$hoofdstad. " de hoofdstad van " .$land.
                    "</p>"
            ?>
        </p>
        <a href="../index.php">Terug</a>
    </body>
</html>