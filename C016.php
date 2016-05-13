<?php

    $beforeReplace = ['A','E','G','I','O','S','Z'];
    $afterReplace = ['4','3','6','1','0','5','2'];

    $subject = trim(fgets(STDIN));

    for ($i=0; $i < strlen($subject) ; $i++) {
        if(strpos($subject,$beforeReplace[$i]) !== false){
            $subject = str_replace( $beforeReplace[$i] , $afterReplace[$i] ,
                                                         $subject );
        }
    }

    echo $subject ."\n";

?>
