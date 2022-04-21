<?php
//given an ordered array of numbers, I need to find a pair of numbers that summed is equal to the number informed
//Ex.: [1,2,3,9]
//sum: = 8
//Ex.: [1,2,4,4]
//sum: = 8

function calculateSumFromOrderedCollection(array $array, int $sum): bool
{
    $arrSize = count($array);
    $firstIterator = 0;
    $lastIterator = $arrSize-1;
    while($lastIterator > $firstIterator) {
        $currentSum = $array[$firstIterator] + $array[$lastIterator];
        if($currentSum === $sum) {
           return true;
        }
        if($currentSum < $sum) {
            $firstIterator++;
            continue;
        }
        $lastIterator--;
    }
    return false;
}

echo calculateSumFromOrderedCollection([1,2,3,9], 8);
echo calculateSumFromOrderedCollection([1,2,4,4], 8);
echo calculateSumFromOrderedCollection([1,1,2,2,4,4], 3);