<?php
function isPerfectNum ($num){
    $sum = 0;
    for ($i=1; $i < $num ; $i++) {
        if($num % $i===0){
            $sum += $i;
        }
    }
    return $sum===$num;
}

function isNearlyNum ($num){
    $sum = 0;
    for ($i=1; $i < $num ; $i++) {
        if($num % $i===0){
            $sum += $i;
        }
    }
    return $sum===$num-1;
}

//main
$N = intval(trim(fgets(STDIN)));

for ($i=0; $i < $N; $i++) {
    $Number = intval(trim(fgets(STDIN)));

    if(isPerfectNum($Number)){
        echo "perfect\n";
    }elseif(isNearlyNum($Number)){
        echo "nearly\n";
    }else{
        echo "neither\n";
    }
}

?>
