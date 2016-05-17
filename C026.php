<?php
$inputArray = preg_split('/ /', trim(fgets(STDIN)));
$N = intval($inputArray[0]);
$S = intval($inputArray[1]);
$p = intval($inputArray[2]);
$maxM = 0;
$maxMnum = 0;

for ($i=0; $i < $N; $i++) {
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));
    $m = intval($inputArray[0]);
    $s = intval($inputArray[1]);

    if($S - $p <= $s and $S + $p >= $s){
        if($maxM < $m){
            $maxM = $m;
            $maxMnum = $i+1;
        }
    }
}

if($maxMnum===0){
    echo "not found\n";
}else{
    echo $maxMnum ."\n";
}

?>
