<?php
    $input = preg_split('/ /', trim(fgets(STDIN)));

    $m = (int)$input[0];
    $n = (int)$input[1];

    $a = $m;
    echo $a ." ";

    for ($i=0 ; $i < 9 ; $i++) {
        $a = $a + $n;

        if($i < 8){
            echo $a ." ";
        } else {
            echo $a ."\n";
        }
    }
?>
