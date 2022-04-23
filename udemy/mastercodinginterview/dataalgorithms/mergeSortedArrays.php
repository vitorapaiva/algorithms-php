<?php

//this is the implementation as shown in the solution video
function mergeSortedArrays(array $array1, array $array2): array
{
    $newArray = [];
    $array1FirstItem = $array1[0];
    $array2FirstItem = $array2[0];
    $limitLoop = (count($array1) + count($array2)) - 1;
    $i = 1;
    $x = 1;

    while ($limitLoop >= 0) {
        if ($array2FirstItem === null || ($array1FirstItem !== null && $array1FirstItem < $array2FirstItem)) {
            $newArray[] = $array1FirstItem;
            $array1FirstItem = $array1[$i] ?? null;
            $i++;
            $limitLoop--;
            continue;
        }

        $newArray[] = $array2FirstItem;
        $array2FirstItem = $array2[$x] ?? null;
        $x++;
        $limitLoop--;
    }

    return $newArray;
}

print_r(mergeSortedArrays([0, 3, 4, 31], [4, 6, 30]));
print_r(mergeSortedArrays([4, 6, 30], [0, 3, 4, 31]));
print_r(mergeSortedArrays([0,3,4,31], [-1,0,3,4,6,30]));