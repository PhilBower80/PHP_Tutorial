<?php

function hello(){
  echo 'Hello, world!';
}

hello();

// scope of variables. use keyword global if variable declared outside of the function.

$current_user = 'Mike';
function is_mike() {
  global $current_user;
  if ($current_user == 'Mike') {
    echo 'It is Mike';
  } else {
    echo 'Nope, it is NOT Mike';
  }
}

is_mike();



?>