<?php
function plusMinus($arr) {
    $arrSize = count($arr);
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;
    foreach($arr as $number) {
        if($number>0) {
            $positiveCount++;
            continue;
        }
        if($number<0) {
            $negativeCount++;
            continue;
        }
        if($number===0) {
            $zeroCount++;
        }
    }
    echo number_format(($positiveCount/$arrSize), 6)."\n";
    echo number_format(($negativeCount/$arrSize), 6)."\n";
    echo number_format(($zeroCount/$arrSize), 6)."\n";
}