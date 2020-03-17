<?php
$learn = array('conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
asort($learn);
var_dump($learn);
echo 'you removed ' . array_shift($learn);
echo 'you removed ' . array_pop($learn);
?>