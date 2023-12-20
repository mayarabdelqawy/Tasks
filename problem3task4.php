<?php
/*A program in which an array of a group of numbers and print the largest and smallest number
INPUT: 
$array = [ 1,10,5,2,11]
OUTPUT: 
Largest number is: 11
Smallest number is: 1*/


$array = [1, 10, 5, 2, 11];
$largest =max($array);
$smallest=min($array);

echo "Largest number is: $largest "."<br>";
echo "Smallest number is: $smallest";
?>