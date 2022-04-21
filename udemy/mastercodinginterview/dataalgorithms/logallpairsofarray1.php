<?php

function logallpairsofarray1(array $array)
{
    foreach ($array as $iValue) {
        foreach ($array as $xValue) {
            echo $iValue . $xValue ." ";
        }
    }
}

logallpairsofarray1([1,2,3,4,5]);