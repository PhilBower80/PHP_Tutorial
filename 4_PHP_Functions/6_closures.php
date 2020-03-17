<?php
// Closures are anonymous functions, which are functions with no name, that are capable of accessing variables outside of the function scope.

$name = 'Phil';

$greet = function() use ($name){
  echo "Hello there $name!";
}; // note the use of a semi-colon to close this variable function. Like you would with a single line variable declaration.

$greet();

?>