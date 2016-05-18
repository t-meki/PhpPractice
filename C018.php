<?php
$n = intval(trim(fgets(STDIN)));

for ($i=0; $i < $n; $i++) {
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));
    $recipe[$inputArray[0]] = intval($inputArray[1]);
    $recipeMaterial[$i] = $inputArray[0];
}

$m = intval(trim(fgets(STDIN)));

for ($i=0; $i < $m; $i++) {
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));
    $material[$inputArray[0]] = intval($inputArray[1]);
}

$serving = 334;

for ($i=0; $i < $n or $i < $m; $i++) {
    $cnt = $material[$recipeMaterial[$i]/$recipe[$recipeMaterial[$i]];
    if($cnt < $serving){
        $serving = $cnt;
    }
}

echo (int)$serving ."\n";

?>
