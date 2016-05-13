<?php

$inputArray = preg_split('/ /', trim(fgets(STDIN)));

$n = (int)$inputArray[0];
$r = (int)$inputArray[1];
$answer = '';

for ($i=0; $i < $n; $i++) {
    $isReceipt = True;
    $boxHwd = preg_split('/ /', trim(fgets(STDIN)));

    for ($j=0; $j<3 ;j++) {
        if((int)$boxHwd[$j] < $r){
            $isReceipt = False;
            break;
        }
    }
    if($isReceipt){
        $answer .= $i+1 ."\n";
    }
}
echo $answer;

?>
