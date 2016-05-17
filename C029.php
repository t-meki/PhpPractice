<?php
$inputArray = preg_split('/ /', trim(fgets(STDIN)));
$M = intval($inputArray[0]);
$N = intval($inputArray[1]);
$minAve = 100;
$sum = 0;

for ($i=0; $i < $M; $i++) {
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));
    $d = intval($inputArray[0]);
    $r = intval($inputArray[1]);
    $Weather[$d] = $r;
    if($i===0){
        $fd = $d;
    }
}

for ($i=$fd; $i < $fd+$M-$N+; $i++) {
    for ($j=0; $j < $N; $j++) {
         $sum += $Weather[$i+$j];
    }
    $ave = $sum/$N;
    $sum = 0;
    if($minAve > $ave){
        $minAve = $ave;
        $md = $i;
    }
}

echo $md ." " .($md+$N-1) ."\n";


?>
