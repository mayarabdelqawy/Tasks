<?php
/*Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array. If Bob is not in the array, return -1.
INPUT: 
$names = ["Alice", "Bob", "Charlie", "Dave"]
$names = ["Alice", "Charlie", "Dave"]
OUTPUT:
1
-1
*/


$names1 = ["Alice", "Bob", "Charlie", "Dave"];
$names2 = ["Alice", "Charlie", "Dave"];
function searchBob($names1)
 {
    $index = array_search("Bob", $names1);

    if ($index ==true)
    {
        return $index;
    } 
    else
     {
        return -1;
     }
}
echo searchBob($names1); 
echo "\n";
echo searchBob($names2); 
?>