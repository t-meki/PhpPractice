<?php

    $s = fgets(STDIN);
    $t = fgets(STDIN);

    if (strcmp($s, $t) === 0) {
        echo "Yes\n";
    } else {
        echo "No\n";
    }

?>
