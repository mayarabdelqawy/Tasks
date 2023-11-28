<?php    
//////EraaSoft Learn by practice//////




////////////////////////////////  problem6 => Get the length of this sentence.////////////////////// 

$text="EraaSoft Learn by practice";
 echo strlen($text);

////////////////////////////////  problem7=>Get the length of this sentence without spaces.///////// 

 echo"<br>";
 $text="EraaSoft Learn by practice";
$lengthWithoutSpaces=strlen(str_replace(' ','',$text));
echo $lengthWithoutSpaces;


///////////////////////////////////// problem8=>Get the number of words in this sentence.////////////
echo"<br>";
$text="EraaSoft Learn by practice";
 echo str_word_count($text);

//////////////////////////////////// problem9=> Check if this word (by) exists in the string or not.////////////////

echo"<br>";

$text="EraaSoft Learn by practice";
$word="Learn";

if(strpos($text,$word)==true)
{
    echo"The word $word exist in this string";
}
else
{
    echo "The word $word  not exist in this string";
}

//////////////////////////////////problem10=>Get the word (EraaSoft) from the string and print it.///////////////////
echo"<br>";

$text=" EraaSoft Learn by practice";
$word="EraaSoft";
$position=strpos($text,$word);
if($position == true)
{
    echo"The word '$word' exist in this string at position $position";
}
else
{
    echo"The word '$word' not exist in this string at position $position";
}


//////////////////////////////problem11=>Remove the word (by) from the string and print the string with and without (by)///////////
echo"<br>";
$text="EraaSoft Learn by practice";
$textWithoutby=str_replace("by",'',$text);
echo $textWithoutby;




?>