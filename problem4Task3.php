<?php   
/*Write a PHP script that calculates the Area of a Triangle 
store the base and height Print the area.*/



$base=4;
$height=5;
$area=(0.5*$base*$height);
echo $area;
///////////////////////////ORRRRRRRRRRRRRRRR/////////////////////////
echo"<br>";

function CalculateTriangleArea($base,$height)
{

$area=(0.5*$base*$height);
return$area;

}
echo "The area of triangle is " .CalculateTriangleArea(4,5) ."m";
?>