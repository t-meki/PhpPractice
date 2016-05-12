<?php
    $a = preg_split('/ /', trim(fgets(STDIN)));

    if($a[0] > $a[1]){
        echo $a[0] ."\n";
    } else if($a[0]===$a[1]) {
        echo "eq\n";
    } else {
        echo $a[1] ."\n";
    }

?>
