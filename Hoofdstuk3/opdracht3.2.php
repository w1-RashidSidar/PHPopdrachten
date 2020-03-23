<?php
include "../includes/Header.php";
include "../Includes/Menu.php";
?>
    <html lang="en">
    <body>
    <h1>
            Uitwerkingen
    </h1>


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
<?php
include "../Includes/Footer.php";


