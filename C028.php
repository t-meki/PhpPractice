<?php
$n = intval(trim(fgets(STDIN)));

$score = 0;

for ($i=0; $i < $n; $i++) {
    $wordCheck = preg_split('/ /', trim(fgets(STDIN)));

    if(strlen($wordCheck[0])!==strlen($wordCheck[1])){
        continue;
    }

    $cnt=0;
    for ($j=0; $j < strlen($wordCheck[1]); $j++) {
        if($wordCheck[0][$j] != $wordCheck[1][$j]){
            $cnt++;
        }
    }

    if($cnt===0){
        $score += 2;
    }elseif($cnt===1){
        $score ++;
    }
    echo $score ."\n";

}

echo $score ."\n";

?>
