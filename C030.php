<?php
$inputArray = preg_split('/ /', trim(fgets(STDIN)));

for ($i=0; $i < 6; $i++) {
    $luckNum[$i] = intval($inputArray[$i]);
}

$N = (int)trim(fgets(STDIN));

for ($i=0; $i < $N; $i++) {
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));

    for ($j=0; $j < 6; $j++) {
        $a[$j] = intval($inputArray[$j]);
    }

    $count = 0;

    for ($l=0; $l < 6; $l++) {
        for ($k=0; $k < 6 ; $k++) {
            if($a[$k]===$luckNum[$l]){
                $count++;
            }
        }
    }
    echo $count ."\n";
}
?>
