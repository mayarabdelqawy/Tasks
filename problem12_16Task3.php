<?php
///////////////////////////////////////////problem12///////////////////////////////////
$string_one = "Eraa"; 
$string_two = "Soft";
$Full_string=$string_one . $string_two;
echo $Full_string;


////////////////////////////////////////////////problem13///////////////////////////////

echo"<hr>";

$string_one = "Eraa"; 
$string_two = "Soft";
$Full_string= $string_one . $string_two;
$word ="EraaSoft";
if(strcmp($Full_string,$word)===0)
{
    echo "The strings are identical";
}
else
{
    echo "The strings are different";
}
/////////////////////////ORRRRRRRRRRRRRRRRRR//////////////////////
echo"<br>";
$string_one = "Eraa"; 
$string_two = "Soft";
$Full_string= $string_one . $string_two;
$word ="EraaSoft";
if($Full_string==$word)
{
    echo "The strings are identical";
}
else
{
    echo "The strings are different";
}
//////////////////////////////////////////////////problem14/////////////////////////////////////
echo"<hr>";
$string_one = "Eraa"; 
$string_two = "Soft";
$Full_string= $string_one . $string_two;
$splitString=chunk_split($Full_string ,2,'/');
echo substr($splitString,0,-1);
/////////////////////////////////ORRRRRRRRRRR//////////////

echo"<br>";
$string_one = "Eraa"; 
$string_two = "Soft";
$Full_string= $string_one . $string_two;
$splitString = preg_replace('/(..)/', '$1/',$Full_string );
$splitString = rtrim($splitString, '/');

echo $splitString;




/////////////////////////////////////////////problem15//////////////////////////////////////////////
echo"<hr>";
$number=13;
if($number%2==0)
{
    echo"The number $number is Even";
}
else
{
    echo"The number $number is Odd";
}


/////////////////////////////////////////////problem16//////////////////////////////////////////////
echo"<hr>";

$string="Mayar";
if(strlen($string)%2==0)
{
    echo"The  length of string '$string' is Even";
}
else
{
    echo"The length of string '$string' is Odd";
}









?>
