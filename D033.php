<?php

    $s = preg_split('/ /', trim(fgets(STDIN)));

    $a = substr($s[0] ,0 ,1);
    $b = substr($s[1] ,0 ,1);
    echo $a . '.' .$b;

?>
