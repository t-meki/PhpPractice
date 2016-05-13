<?php
$n = (int)trim(fgets(STDIN));

for ($i=0; $i <  $n; $i++) {
    $ipAddress[$i] = trim(fgets(STDIN));
}

foreach ($ipAddress as $value) {
    $startSearch = 0;
    $isIpAddress = True;

    for ($j=0; $j < 4 and $isIpAddress ; $j++) {
        $dotPosition = strpos($value , '.', $startSearch) ;
        $ipValue = substr($value, $startSearch ,
                                      ($dotPosition-$startSearch));
        $startSearch = $dotPosition + 1;

        if($ipValue===NULL){
            $isIpAddress = False;
        }elseif($ipValue < 0 or $ipValue > 255){
            $isIpAddress = False;
        }
    }

    if($isIpAddress){
        echo "True\n";
    }else{
        echo "False\n";
    }

}
?>
