<?php

/*The program, in which an array contains 10 numbers, and you store a number and calculates how many numbers are greater  than or equal and how many numbers are smaller  than this number inside.
INPUT: 
$array = [ 1,10,5,2,11]
$x = 3
OUTPUT: 
Numbers Smaller than (3) = 2 
Numbers Greater then (3) = 3*/


$array = [1, 10, 5, 2, 11];
$x = 3;
$countSmaller = 0;
$countGreater = 0;

for ($i = 0; $i < count($array); $i++)
 {
    if ($array[$i] < $x) 
    {
        $countSmaller++;
    } 
    elseif ($array[$i] >= $x)
    {
        $countGreater++;
    }
}
echo "Numbers smaller than ($x) = $countSmaller<br>";
echo "Numbers greater than or equal to ($x) = $countGreater";
?>