<?php

    $n = (int)trim(fgets(STDIN));

    $r = 21 % $n;

    if( $r===0 ){
        echo $n ."\n";
    }else{
        echo $r ."\n";
    }
    
?>
