<?php

    $a = preg_split('/ /', trim(fgets(STDIN)));

    $num = (int)$a[1];

    $var = substr($a[0], $num-1 , 1);

    echo $var ."\n";

?>
