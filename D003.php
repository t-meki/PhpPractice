<?php
    $input = fgets(STDIN);
    $a = (int)$input;

    for($i=1 ; $i<10 ; $i++){
        $b = $a * $i;
        echo $b;

        if($i<9){
            echo " ";
        }else{
            echo "\n";
        }
    }

?>
