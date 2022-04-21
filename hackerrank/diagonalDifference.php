<?php

function diagonalDifference($arr) {
    $arrSize = count($arr);
    $leftRightIterator = 0;
    $rightLeftIterator = $arrSize-1;
    $auxIndex = $arrSize-1;
    $leftRightSum = 0;
    $rightLeftSum = 0;

    while($leftRightIterator<$arrSize) {
        $leftRightSum += $arr[$leftRightIterator][$leftRightIterator];
        $leftRightIterator++;
    }

    while($rightLeftIterator>=0) {
        $rightLeftSum += $arr[$auxIndex - $rightLeftIterator][$rightLeftIterator];
        $rightLeftIterator--;
    }

    return abs($leftRightSum - $rightLeftSum);
}