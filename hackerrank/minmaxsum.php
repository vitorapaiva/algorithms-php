<?php
function miniMaxSum($arr) {
    $arrSize = count($arr);
    for($i = 0; $i < $arrSize; $i++) {
        for($x=$i+1; $x < $arrSize; $x++) {
            if($arr[$i] > $arr[$x]) {
                $aux = $arr[$i];
                $arr[$i] = $arr[$x];
                $arr[$x] = $aux;
            }
        }
    }

    $minSum = $arr[0] + $arr[1] + $arr[2] + $arr[3];
    $maxSum = $arr[4] + $arr[1] + $arr[2] + $arr[3];
    echo $minSum." ", $maxSum;
}