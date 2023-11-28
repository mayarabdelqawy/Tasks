<?php

//(1) The strlen() function in PHP is used to determine the length of a string.
$text= "Hello World";
$length = strlen($text);
echo $length;
echo"<hr>";



//(2) str_word_count: Counts the number of words in a string.
$text = "Eraasoft courses";
echo str_word_count($text);
echo"<hr>";



// (3)str_repeat: Repeats a string a specified number of times.
$text= "Mayar";
echo str_repeat($text,7);
echo"<hr>";



//(4)str_shuffle: Randomly shuffles the characters in a string
$text= "abcdef";
echo str_shuffle($text);
echo"<hr>";


//(5)strrev: Reverses a string.
$text= "Hello";
echo strrev($text);
echo"<hr>";


//(6)ucwords: Uppercases the first character of each word in a string
$text= "hello world";
echo ucwords($text);
echo"<hr>";


//(7)strpos: Finds the position of the first occurrence of a substring in a string.
$text= "Hello World";
echo strpos($text,"World");
echo"<hr>";


//(8)strstr: Returns part of a string from the first occurrence of a substring to the end of the string.
$text= "Hello World";
echo strstr($text, "World");
echo"<hr>";

//(9)substr_replace: Replaces a part of a string with another string.
$text= "Hello World";
echo substr_replace($text,"mayar",7);
echo"<hr>";


//(10)str_contains: Checks if a string contains another string (PHP 8+)
$text= "Hello World";
echo str_contains($text, "World");
echo"<hr>";


//(11)strtoupper(): Converts a string to uppercase.
$text= "hello world";
$uppercase= strtoupper($text);
echo $uppercase;
echo"<hr>";



//(12)strtolower(): Converts a string to lowercase.
$text= "HELLO WORLD";
$lowercase = strtolower($text);
echo $lowercase;
echo"<hr>";

/*(13) The preg_replace() function in PHP is used for performing a search and replace using a regular expression pattern.
 preg_replace($pattern, $replacement, $subject);
$pattern: The regular expression pattern to search for in the $subject string.
$replacement: The string or pattern that will replace the matched pattern.
$subject: The original string where the search and replace will occur.*/

$text= "The quick brown dog jumps over the lazy rappit.";
$newtext= preg_replace('/brown/', 'red',$text);
echo $newtext;

?>