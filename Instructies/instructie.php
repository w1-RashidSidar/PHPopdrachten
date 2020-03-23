
<!--switchstatement-->
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

<br>
<br>

<!--for loop-->
<?php
for ($teller = 0; $teller <= 10; $teller++)
{
    echo "wat" . $teller . "<br>";
}
?>

<br>

<!--while loop-->
<?php
$counter = 0;
$tekst = "";
while ($counter <= 10)
{
    $tekst .= "hoi ". $counter . "<br>";
    //$tekst = $tekst . "hoi". $counter . "<br>";
    $counter++;
}

echo $tekst;
