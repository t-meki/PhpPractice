<?php
    $input = preg_split('/ /', trim(fgets(STDIN)));

    $n = (int)$input[0];

    if($input[1]==='cm'){
        $n = $n * 10;
        echo $n ,"\n";
    } else if($input[1]==='m') {
        $n = $n * 1000;
        echo $n ,"\n";
    } else if($input[1]==='km') {
        $n = $n * 1000000;
        echo $n ,"\n";
    }
?>
