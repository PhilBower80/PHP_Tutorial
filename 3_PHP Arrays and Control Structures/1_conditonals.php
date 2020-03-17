<?php
$a = 10;
$b = 5;

if ($a == $b) {
 echo ' values are equal ';
} elseif($a < $b) {
 echo ' $a is less than $b ';
} elseif($a > $b) {
 echo ' $a is greater than $b ';
} else {
 echo ' values are NOT equal ';
}

$score = 60;
if ($score >= 60) {
  echo 'You completed the level!';
} else {
  echo 'Please try again';
}
?>