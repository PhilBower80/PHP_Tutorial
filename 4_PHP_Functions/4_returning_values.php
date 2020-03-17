<?php

function hello($name) {
  if($name == 'Phil') {
    return 'Hello, Phil';
  } else {
    return 'Hello, stranger';
  }
}

$greeting = hello('Phil');

echo $greeting;

// 

function calculate($a, $b) {
  $arr = array(
    $a,
    $b,
    $a + $b
  );
  return $arr;
}

$answer = calculate(6,4);

print_r($answer); // use print_r function display results of an array, echo won't work with arrays.
echo 'Answer = ', $answer[2];



?>