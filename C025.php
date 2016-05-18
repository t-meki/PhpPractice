<?php
$M = intval(trim(fgets(STDIN)));
$N = intval(trim(fgets(STDIN)));
$hour = 24;
$cnt = 0;
$sum = 0;

for ($i=0; $i < $N; $i++) {
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));
    if($hour < intval($inputArray[0])){
        $cnt += (int)($sum / $M);
        if($sum % $M!==0){
            $cnt ++;
        }
        $sum = 0;
    }
    $hour = intval($inputArray[0]);
    $sum += intval($inputArray[2]);
}

$cnt += (int)($sum / $M);

if($sum % $M!==0){
    $cnt ++;
}

echo $cnt ."\n";

?>
