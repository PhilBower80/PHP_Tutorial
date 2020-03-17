<?php 

// using arguments

function greet($name) {
  echo $name;
}

greet('Phil');


//

$names = array (
  'Phil',
  'Clyde',
  'Derek',
  'Mavis',
);

function greet($arr) {
  if(is_array($arr)) {
    foreach($arr as $name) {
      echo "Hello, $name, how's it going?\n";
    }
  } else {
    echo 'Hello, friends';
  }
}

greet($names);

// 

?>