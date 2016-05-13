<?php

$inputArray = preg_split('/ /', trim(fgets(STDIN)));

$a = (int)$inputArray[0];
$b = (int)$inputArray[1];
$R = (int)$inputArray[2];

$N = trim(fgets(STDIN));

for ($i=0; $i < $N; $i++) {
    $position = preg_split('/ /', trim(fgets(STDIN)));
    $r = ((int)$position[0] - $a) ** 2 + ((int)$position[1] - $b) ** 2;

    if($R**2 <= $r){
        echo "silent\n";
    }else{
        echo "noisy\n";
    }
}
