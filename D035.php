<?php
    $d = preg_split('/ /', trim(fgets(STDIN)));

    for ($i=0; $i < 3; $i++) {
        echo $d[$i] ;

        if($i<2){
            echo '/';
        }
    }
       
    echo "\n";
?>
