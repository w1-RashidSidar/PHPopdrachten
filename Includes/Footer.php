<?php
$base_url = "http://" .$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';

$base_url = "http://localhost/phpopdrachten/";
?>
        <div class="footer">
            <?php
            date_default_timezone_set("Europe,Amsterdam");
            $uur = date("H");

            if ($uur >= 0 && $uur < 05)
            {
                echo "Goedennacht";
            }
            elseif ($uur >= 05 && $uur < 12)
            {
                echo "Goedenochtend";
            }
            elseif ($uur >= 12 && $uur < 17)
            {
                echo "Goedenmiddag";
            }
            elseif ($uur >= 17 && $uur < 24)
            {
                echo "Goedenavond";
            }
            ?>
            bezoeker, &copy; Sidar Rashid 2020
        </div>
    </body>
</html>