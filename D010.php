<?php

    $s[0] = fgets(STDIN);
    $s[1] = fgets(STDIN);

    $t = implode ( '@' , $s );
    $u = preg_replace("/\n|\r/", "", $t);
    echo $t ."\n";

?>
