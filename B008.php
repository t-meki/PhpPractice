<?php
$inputArray = preg_split('/ /', trim(fgets(STDIN)));
$N = intval($inputArray[0]);
$M = intval($inputArray[1]);
$maxBenefit = 0;

for ($i=0; $i < $M; $i++) {
    $sum = 0;
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));

    for ($j=0; $j < $N; $j++) {
        $sum += intval($inputArray[$j]);
    }
    if($sum > 0){
        $maxBenefit += $sum;
    }
}

echo $maxBenefit ."\n";

?>
