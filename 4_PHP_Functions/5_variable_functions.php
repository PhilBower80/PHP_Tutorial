<?php

function answer() {
  return 42;
}

function calculate($a, $b) {
    return $a + $b;
}

$func = 'calculate'; //this references the function called calculate.

$num = $func(5, 10);

echo $num();

?>