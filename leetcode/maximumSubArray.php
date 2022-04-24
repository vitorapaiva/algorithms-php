<?php

function maximumSubArray(array $nums): int
{
    $arrSize = count($nums);

    if ($arrSize === 1) {
        return $nums[0];
    }

    $i = 0;
    $x = $arrSize - 1;
    $largestSum = 0;
    $sum = 0;
    while ($i < $x && $x > 0) {
        $firstItem = $nums[$i];
        $lastItem = $nums[$x];
        $subArray = array_slice($nums, $i, $arrSize);
        $arrSize--;
        foreach ($subArray as $integer) {
            $sum += $integer;
        }

        if ($sum > $largestSum) {
            $largestSum = $sum;
        }
        if ($firstItem >= $lastItem) {
            $x--;
            $sum = 0;
            continue;
        }


        $sum = 0;
        $i++;
    }

    return $largestSum;
}

echo maximumSubArray([-2, 1, -3, 4, -1, 2, 1, -5, 4]) . "\n";
echo maximumSubArray([1]) . "\n";
echo maximumSubArray([5,4,-1,7,8]) . "\n";
