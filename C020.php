<?php

$inputArray = preg_split('/ /', trim(fgets(STDIN)));

$m = (int)$inputArray[0];
$p = (int)$inputArray[1];
$q = (int)$inputArray[2];

$rem = $m * (1 - $p / 100);
$rem = $rem * (1 - $q / 100);

echo $rem ."\n";

?>
