<?php

/*A program in which an array contains 10 numbers and another array 2D of size 2x5.
 What is required is that the second array is dictated by the first array.*/

$firstArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$secondArray = 
               [
                 [$firstArray[0], $firstArray[1], $firstArray[2], $firstArray[3], $firstArray[4]],
                 [$firstArray[5], $firstArray[6], $firstArray[7], $firstArray[8], $firstArray[9]]
               ];
echo "Second 2D Array:-<br>";
foreach ($secondArray as $row)
 {
   print_r($row) ;
    echo"<br>";
 }

////////////////////////////////////////////////or///////////////////////////////
echo"<hr>";

$firstArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$secondArray = array_chunk($firstArray, 5);
echo "Second 2D Array:-<br>";
foreach ($secondArray as $row)
 {
   print_r($row) ;
    echo"<br>";
 }
?>