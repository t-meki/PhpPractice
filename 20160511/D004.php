<?php
    $input = fgets(STDIN);
    $a = (int)$input;

    echo 'Hello ';

    for($i=0 ; $i<$a ; $i++){
        $input_lines = trim(fgets(STDIN));
        echo $input_lines;

        if($i < $a - 1){
            echo ",";
        }else{
            echo ".\n";
        }
    }

?>
