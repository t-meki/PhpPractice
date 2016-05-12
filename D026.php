<?php
$num = 0;

for ($i=0; $i < 7 ; $i++) {
    $n[$i] = trim(fgets(STDIN));

    if (strcmp($n[$i], "no") === 0){
        ++$num;
    }
}

echo $num;

?>
