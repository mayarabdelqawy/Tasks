<?php

/*Write a PHP script that takes a number integer representing
 the hours and converts it to seconds.*/



function hoursTosecond($hours)
{

$seconds=$hours*3600;
return$seconds;

}
echo "the seconds of hours equal " . hoursTosecond(2) ."second";

?>