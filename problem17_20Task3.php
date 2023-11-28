<?php


/*problem17=>Check from this string o If the string has “gain” Print ( success word ) 
 If the string has ( peen ) Print ( success word )  Else ( wrong word )*/

 $description = "no pain , no gain ";
 if(strpos( $description,"gain"))
 {
    echo "success word";
 }
elseif(strpos( $description,"peen"))
{
    echo "success word";
}
else
{
    echo "wrong word";
}


/* proplem=>18A Boolean is a data type that has only two values true or false.
These values often correspond to 1 (true) or 0 (false).
When a 1 or a 0 is used, it's called an int Boolean.
Write a PHP script that stores an int Boolean and outputs its opposite(1 becomes 0 and 0 becomes 1).*/
 echo"<hr>";
$sun=true;
if($sun==true)
{
    echo 0;
}
else
{
    echo 1;
}

/* proplem=>19Write a PHP script that stores a word and determines Is the Word is Singular or Plural?
(A plural word is one that ends in "s".)*/

echo"<hr>";

$word ="mayar";
if (substr($word, -1) === 's') {
    echo "$word is a plural word.";
} else {
    echo "$word is a singular word.";
}

echo"<br>";

$word ="pass";
if (substr($word, -1) === 's') {
    echo "$word is a plural word.";
} else {
    echo "$word is a singular word.";
}


echo"<hr>";
/*proplem=>20Make a calculator with these operations using if and else if
o Submission 
o Subtraction 
o Multiplication 
o Division 
o Power 
o Modulus*/

$num1 = 10; 
$num2 = 5; 
$operation = "Modulus";
$result = 0;

if ($operation == "Submission") 
{
    $result = $num1 + $num2;
    echo "Result: $result";
} 
elseif ($operation == "Subtraction")
 {
    $result = $num1 - $num2;
    echo "Result: $result";
} 
elseif ($operation == "Multiplication")
 {
    $result = $num1 * $num2;
    echo "Result: $result";
 }
 elseif ($operation == "Division")
  {
       if ($num2 != 0) 
         {
           $result = $num1 / $num2;
           echo "Result: $result";
         } 
       else
          { 
            echo "Cannot divide by zero!";
           }
             
   } 

elseif ($operation == "Power") 
{
    $result = pow($num1, $num2);
    echo "Result: $result";
} 
elseif ($operation == "Modulus")
 {
    $result = $num1 % $num2;
    echo "Result: $result";
} 
else
 {
    echo "Invalid operation. Please choose a valid operation.";
 }

?>