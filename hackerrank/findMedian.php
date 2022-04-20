<?php
function findMedian($arr) {
    $arrSize = count($arr);
    $mediumIndex = intdiv($arrSize, 2);
    $count = 0;
    for($i = 0; $i < $arrSize; $i++) {
        for($x=$i+1; $x < $arrSize; $x++) {
            if($arr[$i] > $arr[$x]) {
                $aux = $arr[$i];
                $arr[$i] = $arr[$x];
                $arr[$x] = $aux;
            }
            $count++;
        }
    }
    return json_encode($arr)." ".$count."\n";
    //return $arr[$mediumIndex];
}

echo findMedian([1,2,3,4,5,6,7]);

echo findMedian([6,5,4,2,3,1,7]);

echo findMedian([1,3,6,2,4,5,7]);
