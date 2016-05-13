<?php

$N = (int)trim(fgets(STDIN));
$sum = 0;

for ($i=0; $i < $N; $i++) {
    $receipt = preg_split('/ /', trim(fgets(STDIN)));

    if(strpos($receipt[0],'3') !== false){
        $point = (int)$receipt[1] * 3 / 100;
    }elseif(strpos($receipt[0],'5') !== false){
        $point = (int)$receipt[1] / 20;
    }else{
        $point = (int)$receipt[1] / 100;
    }

    $sum += (int)$point;
}

echo $sum ."\n";

?>
