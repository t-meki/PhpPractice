<?php

    $input = preg_split('/ /', trim(fgets(STDIN)));

    $m = (int)$input[0];
    $n = (int)$input[1];

    $q = $m / $n;
    $r = $m % $n;

    echo $q ." " .$r;

?>
