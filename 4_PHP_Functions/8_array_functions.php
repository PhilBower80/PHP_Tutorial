<?php

$names = array(
  'Mike' => 'Frog',
  'Chris' => 'Teacher',
  'Hampton' => 'Teacher'
);

// foreach (array_keys($names) as $name) {
//   echo "Hello, $name\n";
// };

function print_info($value, $key) {
  echo "$key is a $value.\n";
}

array_walk($names, 'print_info');

?>