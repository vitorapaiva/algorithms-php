<?php

function lonelyinteger($a) {
    $auxArr = [];
    foreach($a as $integer) {
        if(!isset($auxArr[$integer]["count"])) {
            $auxArr[$integer]["count"] = 1;
            continue;
        }
        $auxArr[$integer]["count"]++;
    }
    foreach($auxArr as $index => $count) {
        if($count["count"]===1) {
            return $index;
        }
    }
}