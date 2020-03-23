<?php
// PHP - Evers,
// Database SQL - Van de Wetering,
// Digtale vaardigheden - Pielage
// Javascript - Van de Wetering,
// ASP - Gijsbrechts,
// Rekenen - Van Meer,
// Engels - Mitrovic,
// L&B - Lambregts,
// Nederlands, Rijswijk,
// Modelleren - Gijsbrechts,
// Computertekenen - Van den Berg


$courseName = "PHP";

switch ($courseName)
{
    case "PHP":
        $teacherName = "Evers";
        break;
    case "Javascript":
    case "Database SQL":
        $teacherName = "Van de Wetering";
        break;
    case "Rekenen":
        $teacherName = "Van Meer";
        break;
    case "Nederlands":
        $teacherName = "Rijswijk";
        break;
    case "Modelleren":
    case "ASP":
        $teacherName = "Gijsbrechts";
        break;
    case "Computertekenen":
        $teacherName = "Van den Berg";
        break;
    case "Engels":
        $teacherName = "Mitrovix";
        break;
    case "L&B":
        $teacherName = "Lambrechts";
        break;
    case "Digitale vaardigheden":
        $teacherName = "Pielage";
        break;


}

echo "Voor het vak <span style='font-weight: bold'>" . $courseName . "</span> Heb je <span style='font-weight: bold'>" . $teacherName . "</span> als docent.";