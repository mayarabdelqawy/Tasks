<?php
/*Create a function that takes an array of names and returns an array where only the first letter of each name is capitalized.
INPUT: 
Array_of_names(["eraasoft", "backend", "group313"]) 
OUTPUT: 
 ["EraaSoft", "Backend", "Group313"]*/



function capitalizeFirstLetter($names) 
{
    return array_map('ucfirst', $names);
}

$inputNames = ["eraasoft", "backend", "group313"];
$outputNames = capitalizeFirstLetter($inputNames);

echo "[".implode(",", $outputNames)."]";//print_r,var_dump,impload
?>