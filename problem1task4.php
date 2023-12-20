<?PHP
/* A program that calculates the average of the numbers in an array of n elements.
  The array is filled with random numbers.*/




$n = 10; 
$randomNumbers = [];
for ($i = 0; $i < $n; $i++)
 {
    $randomNumbers[] = rand(1, 100);
 }
$average = array_sum($randomNumbers) / count($randomNumbers);
print_r($randomNumbers);
echo"<br>";
echo $average;


////////////////////////////////////////////////orrrrrrrrrrrrrrrrrrrrrr////////////////////
echo"<hr>";

$n = 10; 
$randomNumbers = array_map(function() { return rand(1, 100); }, range(1, $n));
$average = array_sum($randomNumbers) / count($randomNumbers);
 print_r($randomNumbers);
 echo"<br>";
echo $average;












?>


















