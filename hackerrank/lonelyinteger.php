<?php

function lonelyinteger($a) {
    $auxArr = [];
    foreach($a as $integer) {
        if(!array_key_exists($integer, $auxArr)) {
            $auxArr[$integer] = 1;
            continue;
        }
        $auxArr[$integer]++;
    }
    foreach($auxArr as $index => $count) {
        if($count===1) {
            return $index;
        }
    }
}