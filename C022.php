<?php

$minPrice = 1000000;
$maxPrice = 0;

$n = (int)trim(fgets(STDIN));

for ($i=0; $i < $n; $i++) {
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));
    $highPrice = intval($inputArray[2]);
    $lowPrice = intval($inputArray[3]);

    if($i===0){
        $startPrice = intval($inputArray[0]);
    }elseif($i===4){
        $endPrice = intval($inputArray[1]);
    }
    if($minPrice > $lowPrice){
        $minPrice = $lowPrice;
    }
    if($highPrice > $maxPrice){
        $maxPrice = $highPrice;
    }
}

echo $startPrice ." " ,$endPrice ." " ,$maxPrice ." " ,$minPric ."\n" ;

?>
