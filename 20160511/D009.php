<?php
    $input = preg_split('/ /', trim(fgets(STDIN)));

    $n = (int)$input[0];
    $l = (int)$input[1];

    $rem = $l - $n;
    echo $rem ;
?>
