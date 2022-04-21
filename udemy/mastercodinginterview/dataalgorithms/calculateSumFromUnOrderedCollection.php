<?php

//given an unordered array of numbers, I need to find a pair of numbers that summed is equal to the number informed
//Ex.: [1,2,3,9]
//sum: = 8
//Ex.: [1,2,4,4]
//sum: = 8

function calculateSumFromUnOrderedCollection(array $array, int $sum): bool
{
    $arrayComp = [];
    foreach($array as $item) {
        if(array_key_exists($item, $arrayComp)) {
            return true;
        }
        $arrayComp[$sum-$item]=$item;
    }
    return false;
}

echo calculateSumFromUnOrderedCollection([9,1,2,3], 8)."\n";
echo calculateSumFromUnOrderedCollection([4,1,2,4], 8)."\n";
echo calculateSumFromUnOrderedCollection([1,3,2,4], 3)."\n";