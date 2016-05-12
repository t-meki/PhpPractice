<?php

    $input = fgets(STDIN);
    $num = (int)fgets(STDIN);

    $var = substr($input, 0 , $num);

    echo $var ."\n";

?>
