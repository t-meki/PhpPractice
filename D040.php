<?php
    $count = 0;

    for ($i=0; $i < 7; $i++) {
        $rainPer = (int)trim(fgets(STDIN));

        if($rainPer <= 30){
            ++$count;
        }
    }

    echo $count ."\n";

?>
