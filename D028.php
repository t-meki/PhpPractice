<?php
    $n = (int)fgets(STDIN);
    $count = 0;

    while ($n < 10) {
        $n =  $n / 10;
        $count++;
    }

    echo $count;
?>
