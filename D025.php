<?php

    $s = trim(fgets(STDIN));

    $b = strlen($s);

    if($b===1){
        echo '00' .$s;
    }elseif($b===2){
        echo '0' .$s;
    }

?>
