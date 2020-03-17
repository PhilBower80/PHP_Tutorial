<?php
$name = 'Alena';
$string_one = 'learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one = $string_one . "\n";
// prepend to a string
$string_one = 'I am ' . $string_one;
echo $string_one;

// this shows that code is read top down.
$isReady = true;
var_dump($isReady);
$isReady = false;
var_dump($isReady);
?>