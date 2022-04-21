<?php
function countingSort($arr) {
    $arrCount = array_fill(0, 100, 0);
    foreach($arr as $integer) {
        $arrCount[$integer]++;
    }
    return $arrCount;
}