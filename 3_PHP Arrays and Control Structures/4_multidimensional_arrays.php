<?php 
$task1 = array(
  'title' => 2,
  'priority' => 2,
  'due' => '',
  'complete' => true,
);
$task2 = array(
  'title' => 'Clean out refridgerator',
  'priority' => 3,
  'due' => '03/17/2020',
  'complete' => true,
);

$list = array($task1, $task2);
var_dump($list);
?>

<!-- same as above however this is written in the shorthand version. -->
<?php 
$list[] = [
  'title' => 2,
  'priority' => 2,
  'due' => '',
  'complete' => true,
];
$list[] = [
  'title' => 'Clean out refridgerator',
  'priority' => 3,
  'due' => '03/17/2020',
  'complete' => true,
];
var_dump($list);
?>