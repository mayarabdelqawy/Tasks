<?php
// Write a PHP script that takes the age in years and prints the age in days.



function ageYearsToDays($years)
{
$days=$years*365;
return$days;
}
echo "The age per dasys is  " . ageYearsToDays(10) ."day";

?>