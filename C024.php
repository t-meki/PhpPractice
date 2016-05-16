<?php

$n = (int)trim(fgets(STDIN));

for ($i=0; $i < $n; $i++) {
    $s = preg_split('/ /', trim(fgets(STDIN)));

    if(strpos($s[0],'SET')!==False){
        $j[(int)$s[1]] = intval($s[2]);

    }elseif(strpos($s[0],'ADD')!==False){
        $j[2] = $j[1] + intval($s[1]);

    }elseif(strpos($s[0],'SUB')!==False){
        $j[2] = $j[1] - intval($s[1]);
    }
}

    echo $j[1] ." " ,$j[2] ."\n";
?>
