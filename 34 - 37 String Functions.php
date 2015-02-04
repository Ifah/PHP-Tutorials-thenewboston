<?php
$string = 'This is an example string.';
$string_word_count = str_word_count($string); //output = 5
echo $string_word_count;

echo '<br/>';
$string_word_count1 = str_word_count($string, 0); //output = 5
echo $string_word_count1;

echo '<br/>';
$string_word_count2 = str_word_count($string, 1); //output = Array ( [0] => This [1] => is [2] => an [3] => example [4] => string )
print_r($string_word_count2);

echo '<br/>';
$string_word_count2 = str_word_count($string, 2); //output = Array ( [0] => This [5] => is [8] => an [11] => example [19] => string )
print_r($string_word_count2);

echo '<br/>';
$string_word_count2 = str_word_count($string, 1, '.'); //output = Array ( [0] => This [1] => is [2] => an [3] => example [4] => string. )
print_r($string_word_count2);

echo '<br/>';
$string_word_count2 = str_word_count($string, 2, '.'); //output = Array ( [0] => This [5] => is [8] => an [11] => example [19] => string. )
print_r($string_word_count2);

$string = 'This is an example string .';
echo '<br/>';
$string_word_count2 = str_word_count($string, 2, '.'); //output = Array ( [0] => This [5] => is [8] => an [11] => example [19] => string [26] => . )
print_r($string_word_count2);


$string = 'This is an example string .';
echo '<br/>';
$string_word_count2 = str_word_count($string, 2, '&!#.'); //output = Array ( [0] => This [5] => is [8] => an [11] => example [19] => string [26] => . )
print_r($string_word_count2);

echo '<br/>';
$string = 'This is going to be shuffled';
$string_shuffled = str_shuffle($string);
echo $string_shuffled;

echo '<br/>';
$string = 'abcdefghijklmnopqrstuvwxyz0123456789';
$string_shuffled = str_shuffle($string);
$half = substr($string_shuffled, 0, strlen($string)/2);
echo $half;

//echo '<br/>';
//$string = 'This is an example string.';
//$string_reversed = str_rev($string);
//echo $string_reversed;

echo '<br/>';
$string_one = 'This is my essay. I\'m going to be talking about php.';
$string_two = 'My essay is about cats. I\'m going to be talking about cats their colors.';
similar_text($string_one, $string_two, $result);
echo 'The similarity is: '.$result; // output = The similarity is: 66.129032258065


echo '<br/>';
$string = 'This is an example string.';
$string_length = strlen($string);
echo $string_length; // output = 26

echo '<br/>';
$string = '  This is an example string.  ';
$string_trimmed = trim($string);
$string_trimmed = rtrim($string);
$string_trimmed = ltrim($string);
echo $string_trimmed; // output = This is an example string.


echo '<br/>';
$string = 'This is a <img src="image.jpg"> string.';
$string_slashes = htmlentities(addslashes($string));
echo $string_slashes; // output = This is a <img src=\"image.jpg\"> string.
echo '<br/>';
echo stripslashes($string_slashes); //output = This is a <img src="image.jpg"> string.
?>