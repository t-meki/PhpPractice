<?php

    $max = 0;
    $min = 100;

    for ($i=0; $i < 5 ; $i++) {
        $n[$i] = (int)fgets(STDIN);

        if($n[$i] < $min){
            $min = $n[$i];
        }
        if($n[$i] > $max){
            $max = $n[$i];
        }
    }

    echo $max ."\n";
    echo $min ."\n";

?>
