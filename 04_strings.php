<?php

//// Create simple string
//$name = 'Sandeep';
//$string = 'Hello I am '.$name.'. I am 18';
//$string2 = "Hello I am $name. I am 20";
//echo $string.'<br>';
//echo $string2. '<br>';
//
//// String concatenation
//echo 'Hello'.'World'.' and PHP'.'<br>';
//echo 'Hello World and PHP'.'<br>';

// String functions
//$string = "    Hello World      ";
//
//echo"1 - " . Strlen($string) .'<br>' .PHP_EOL;
//echo"2 - " . trim($string) .'<br>' .PHP_EOL;
//echo"3 - " . ltrim($string) . '<br>'.PHP_EOL;
//echo"4 - " . rtrim($string) . '<br>'.PHP_EOL;
//echo"5 - " . str_word_count($string) . '<br>'.PHP_EOL;
//echo"6 - " . strrev($string) .'<br>'.PHP_EOL;
//echo"7 - " . strtoupper($string) . '<br>'.PHP_EOL;
//echo"8 - " . strtolower($string) . '<br>'.PHP_EOL;
//echo"9 - " . ucfirst('hello') . '<br>'.PHP_EOL;
//echo"10 - " . lcfirst('HELLO') . '<br>'.PHP_EOL;
//echo"11 - " . ucwords('hello world and php') . '<br>'.PHP_EOL;
//echo"12 - " . strpos($string,'World') . '<br>' .PHP_EOL;
//echo"13 - " . stripos($string,'world') . '<br>' . PHP_EOL;
//echo"14 - " . substr($string, 8, 7) . '<br>' .PHP_EOL;
//echo"15 - " . str_replace('World', 'Sandeep', $string) . '<br>'.PHP_EOL;
//echo"16 - " . str_ireplace('world','PHP',$string) .'<br>'.PHP_EOL;
// Multiline text and line breaks
$longText = "
Hello, my name is Ram
I am 28,
I love my son.
";
//echo $longText.'<br>';
//echo nl2br($longText).'<br>';
// Multiline text and reserve html tags
$longText ="
Hello, my name is <b>Ram</b>
I am <b>28</b>,
I love my <b>daughter</b>.";
echo"1 - " . $longText . '<br>';
echo"2 - " . nl2br($longText) . '<br>';
echo"3 - " . htmlentities($longText) .'<br>';
echo"4 - " . nl2br(htmlentities($longText)) .'<br>';
echo"5 - " . bin2hex($longText). '<br>';
echo html_entity_decode(' &lt;b&gt;Ram&lt;/b&gt;');
// https://www.php.net/manual/en/ref.strings.php