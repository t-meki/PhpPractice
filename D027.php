<?php
    $n = (int)fgets(STDIN);
    $s = 0;

    for ($i=1 ; $i <= $n ; $i++) {
        $s =  $s + $i;
    }

    echo $s;
?>
