<?php
    $inputArray = preg_split('/ /', trim(fgets(STDIN)));

    $N = (int)$inputArray[0];
    $M = (int)$inputArray[1];
    $K = (int)$inputArray[2];

    for ($i=0; $i < $K+1; $i++) {
        $scoreArray[$i] = 0;
    }

    $C = preg_split('/ /', trim(fgets(STDIN)));

    for ($i=0; $i < $M; $i++) {
        $X = preg_split('/ /', trim(fgets(STDIN)));
        $S = 0;

        for ($j=0; $j < $N; $j++) {
            $S += (float)$C[$j] * (int)$X[$j];
        }

        for ($k=0; $k < $K; $k++) {
            if($S > $scoreArray[$k]){
                $scoreArray[] = $S;
                rsort($scoreArray);
                break;
            }
        }
    }

    for ($i=0; $i < $K; $i++){
        echo round($scoreArray[$i]) ."\n";
    }

?>
