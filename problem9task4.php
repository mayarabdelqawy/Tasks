
<?php
/*9.A program containing an array of different numbers and store a number $x If the number is not in the array prints not found and if it exists prints found and prints this number characteristics like
Positive or Negative 
How many digits are in this number 
Is-Prime or not. 
odd or even
read from the right as the left or not such as "505"
INPUT: 
$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140] $ x = 545
$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140] $ x = 1000
OUTPUT:
Found, Positive, not prime, odd , Yes 🡺 read from the right as the left*/


$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
$x = 545;
function checkNumber($numbers, $x) 
{
    if (in_array($x, $numbers)) {
        echo "Found, ";
        echo ($x >= 0) ? "Positive, " : "Negative, ";

        $numDigits = strlen(abs($x));
        echo "Number of digits: $numDigits, ";

        $isPrime = true;
        if ($x < 2) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($x); $i++) {
                if ($x % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }
        echo ($isPrime) ? "Prime, " : "Not prime, ";
        echo ($x % 2 == 0) ? "even, " : "odd, ";

        $strX = (string) $x;
        $reverseX = strrev($strX);
        echo ($strX == $reverseX) ? "Yes 🡺 read from the right as the left":-"No";
    } else {
        echo "Not found";
    }
}
echo checkNumber($numbers, $x);
?>