<?php
// 1-array_merge(): Merges one or more arrays
$array1 = ['m', 'a', 'y'];
$array2 = ['a', 'r'];
$mergedArray = array_merge($array1, $array2);
 print_r($mergedArray);
 echo"<hr>";


//  2-array_unshift(): Adds one or more elements to the beginning of an array
$fruits=['apple', 'banana'];
array_unshift($fruits,'orange', 'grape');
print_r($fruits);
echo"<hr>";



// 3-array_shift(): Shifts an element off the beginning of the array.
$fruits=['apple', 'banana'];
array_shift($fruits);
print_r($fruits);
echo"<hr>";



// 4-array_push(): Pushes one or more elements onto the end of an array
$fruits=['apple', 'banana'];
array_push($fruits,'orange', 'grape');
print_r($fruits);
echo"<hr>";



// 5-array_pop(): Pops the element off the end of the array.
$fruits = ['apple','banana'];
array_pop($fruits);
print_r($fruits);
echo"<hr>";



// 6-array_slice(): Extracts a slice of an array.
$numbers = [1, 2, 3, 4, 5];
$number=array_slice($numbers,2,2);
print_r($number);
echo"<hr>";


// 7-array_splice(): Removes a portion of an array and replaces it with something else.
$numbers = [1, 2, 3, 4, 5];
array_splice($numbers,2,2);
print_r($numbers);
echo"<hr>";

// 8-array_reverse(): Reverses the order of elements in an array
$numbers = [1, 2, 3, 4, 5];
$number=array_reverse($numbers);
print_r($number);
echo"<hr>";

// 9-array_unique(): Removes duplicate values from an array
$numbers = [1, 2, 2, 3, 4, 4];
$uniqueNumbers=array_unique($numbers);
print_r($uniqueNumbers);
echo"<hr>";

// 10-array_key_exists(): Checks if the specified key exists in the array.
$data = ['name' => 'John', 'age' => 30, 'country' => 'USA'];
$exists = array_key_exists('age', $data);
echo($exists);
echo"<hr>";



// 11-array_search(): Searches the array for a given value and returns the first corresponding key if successful.
$numbers = ['a' => 10,'b' => 20,'c' => 30];
$key = array_search(20, $numbers);
print_r($key);
echo"<hr>";



// 12-array_map(): Applies a callback to each element of an array and returns the modified array.
$numbers = [1, 2, 3, 4];
$doubled = array_map(function($n) { return $n * 2; }, $numbers);
print_r($doubled);
echo"<hr>";


// 13-array_filter(): Filters elements of an array using a callback function
$numbers = [1, 2, 3, 4, 5];
$evens= array_filter( $numbers, function($n){ return $n % 2 === 0;});
print_r($evens);
echo"<hr>";

// 14- array_intersect(): Computes the intersection of arrays
$array1 = [1, 2, 3, 4];
$array2 = [2, 4, 6, 8];
$intersection = array_intersect($array1, $array2);
print_r($intersection);
echo"<hr>";

// 15-array_sum(): Calculates the sum of values in an array.
$numbers = [1, 2, 3, 4, 5];
$sum=array_sum($numbers);
print_r($sum);
echo"<hr>";







?>