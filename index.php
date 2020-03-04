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
    <link type="text/css" rel="stylesheet" href="CSS/Style.css">
    <title>
        Template
    </title>
</head>

<body>
    <?php
        Include "Includes/Header.php";
        Include "Includes/Menu.php";
        Include "Includes/Uitwerkingen.php";
    ?>
    <p> hello </p>
    <?php
        Include "Includes/Footer.php";
    ?>

    <?php
    $day = date("l");

    switch ($day)
    {
        case "Monday";
            echo "Het is maandag";
            break;
        case "Tuesday";
            echo "Het is dinsdag";
            break;
        case "Wednesday";
            echo "Het is woensdag";
            break;
        default:
            echo "Dit is een andere dag";
            break;
    }
    ?>

</body>

</html>