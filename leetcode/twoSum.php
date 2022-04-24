<?php

function twoSum(array $nums, int $target): array //O(n^2)
{
    $arrSize = count($nums);
    for($i=0; $i<$arrSize; $i++){
        for($x=$i+1;$x<$arrSize;$x++){
            if(($nums[$i]+$nums[$x]) === $target) {
                return [$i,$x];
            }
        }
    }
    return [];
}

print_r(twoSum([2,7,11,15], 9));
print_r(twoSum([3,2,4], 6));
print_r(twoSum([3,3], 6));
print_r(twoSum([3,4], 6));

function twoSum2(array $nums, int $target): array //O(?)
{
    //to-do
}

print_r(twoSum2([2,7,11,15], 9));
print_r(twoSum2([3,2,4], 6));
print_r(twoSum2([3,3], 6));
print_r(twoSum2([3,4], 6));