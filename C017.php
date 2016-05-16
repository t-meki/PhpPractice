<?php

$inputArray = preg_split('/ /', trim(fgets(STDIN)));
$a = (int)$inputArray[0];
$b = (int)$inputArray[1];

$n = trim(fgets(STDIN));

for ($i=1; $i <= $n; $i++) {
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));
    $A[$i] = (int)$inputArray[0];
    $B[$i] = (int)$inputArray[1];

    if ($a > $A[$i]){
        echo "High\n";
    }else if ($a < $A[$i]){
        echo "Low\n";
    }else if ($b < $B[$i]){
        echo "High\n";
    }else if ($b > $B[$i]){
        echo "Low\n";
    }
}

?>
