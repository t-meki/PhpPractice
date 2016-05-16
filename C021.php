<?php

$n = trim(fgets(STDIN));
$m = trim(fgets(STDIN));
$flag = True;

for ($i=0; $i < $m; $i++) {
    $r[$i]=trim(fgets(STDIN));
}

for ($i=0; $i < $m; $i++) {
    if(strpos($r[$i],$n) === false){
        echo $r[$i] ."\n";
        if($flag){
            $flag = False;
        }
    }
}

if($flag){
    echo "none\n"
}


?>
