<?php
$inputArray = preg_split('/ /', trim(fgets(STDIN)));
$var = trim(fgets(STDIN));
$startSearch = 0;
$counter = 0;


while(strpos($var ,$inputArray[0] , $startSearch)!==False
      or strpos($var ,$inputArray[1] , $startSearch)!==False){
    switch ($counter % 3) {
        case 0:
            $endSearch = strpos($var ,$inputArray[0] , $startSearch) ;
            $tagLen = strlen($inputArray[0]);
            $startSearch = $endSearch + $tagLen;
            $counter++;
            break;

        case 1:
            $endSearch = strpos($var ,$inputArray[1] , $startSearch) ;
            if($endSearch===$startSearch){
                echo "<blank>\n";
            }else{
                echo substr($var ,$startSearch ,($endSearch - $startSearch)) ."\n";
            }
            $counter++;
            break;

        case 2:
            $endSearch = strpos($var ,$inputArray[1] , $startSearch) ;
            $tagLen = strlen($inputArray[1]);
            $startSearch = $endSearch + $tagLen;
            $counter++;
            break;
    }

}
