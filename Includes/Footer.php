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
        Template
    </title>
</head>

    <body>
        <?php
        $base_url = "http://" .$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';

        $base_url = 'https://localhost/PHPopdrachten/'
        ?>
        <div class="footer">
            &copy; 2020
        </div>
    </body>
</html>
