<?php
include "../includes/Header.php";
include "../Includes/Menu.php";
include "../Includes/Uitwerkingen.php";
?>
    <html lang="en">
    <body>
<!--        <main id="wrapper">-->
<!--            <h2>Uitwerkingen</h2>-->
<!--        </main>-->


<?php
    $driveOn = true;
    $trafficLightColor = "Green";
    $AmbulanceComing = false;

    if ($trafficLightColor == "Green" && $AmbulanceComing == false)
    {
        $driveOn = true;
    }
    elseif ($trafficLightColor == "Green" && $AmbulanceComing == true)
    {
       $driveOn = false;
    }
    elseif ($trafficLightColor == "Orange" && $AmbulanceComing == true)
    {
       $driveOn = false;
    }
    elseif ($trafficLightColor == "Orange" && $AmbulanceComing == false)
    {
       $driveOn = false;
    }
    elseif ($trafficLightColor == "Red" && $AmbulanceComing == true)
    {
       $driveOn = false;
    }
    elseif ($trafficLightColor == "Red" && $AmbulanceComing == false)
    {
       $driveOn = false;
    }

    if ($driveOn == true)
    {
        echo "<p> u mag doorrijden </p>";
    }
    elseif ($driveOn == false)
    {
        echo "<p> u moet stoppen </p>";
    }

?>

        </body>
    </html>


