<?php 

function get_info ($name, $title = Null) {
  if($title) {
    echo "$name has arrived, they are with us as a $title";
  } else {
    echo "$name has arrived, welcome!";
  }
  

}

get_info('Phil');
// or
// get_info('Phil', 'Jedi');

?>