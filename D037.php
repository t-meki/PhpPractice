<?php
    $m = (int)trim(fgets(STDIN));
    $n = (int)trim(fgets(STDIN));

    $box = $m / $n ;

    if($m % $n!==0){
        ++$box;
    }

    echo $box ."\n";
?>
