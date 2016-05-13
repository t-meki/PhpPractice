<?php

    $a = (int)trim(fgets(STDIN));
    $b = (int)trim(fgets(STDIN));
    $c = (int)trim(fgets(STDIN));

    if($a===$b and $b===$c){
        echo "YES\n";
    }else{
        echo "NO\n";
    }

?>
