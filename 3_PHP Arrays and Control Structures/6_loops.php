
// WHILE LOOP
<?php
$currentYear = date('Y');
$year = $currentYear - 100;

while (++$year <= $currentYear) {
  echo $year . "<br />\n";
//  $year++; this is now incremented in the if condition beofre the loop is run
}
?>



// DO WHILE LOOP
<?php

$currentYear = date('Y');
$year = $currentYear - 100;

do {
  echo $year . "<br />\n";
} while (++$year <= $currentYear);

?>


// WHILE LOOP ( USING LANGUAGE CONSTRUCT 'LIST' see - https://www.php.net/manual/en/function.list.php
<?php

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
asort($learn);

$count = 0;
while ((list($key, $val) = each($learn)) && $count++ < 2) {
echo "$key => $val\n";
};

?>

// FOR LOOP
<?php

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
sort($learn);

for ($i = 0; $i < count($learn); $i++) {
  echo $learn[$i] . "\n";
}

?>