<?php
/*
8.Create a function that takes a array of numbers and returns the second largest number.
INPUT: 
$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10]
OUTPUT:
11
array_unique=>Remove duplicates
array_values=>re-indexarray
rsort=>Sort the array in descending order*/



$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function secondLargest($numbers)
 {
    $uniqueNumbers = array_values(array_unique($numbers));
    rsort($uniqueNumbers);

    if (count($uniqueNumbers) >= 2)
     {
        return $uniqueNumbers[1]; 
     } 
    else 
    {
        return "There is no second largest number.";
    }
}
$result = secondLargest($numbers);
echo "Second largest number:".$result;
?>