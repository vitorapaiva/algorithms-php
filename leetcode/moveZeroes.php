<?php

function moveZeroes(array $nums): array
{
    $arrSize = count($nums);
    for ($i = 0; $i < $arrSize; $i++) {
        if ($nums[$i] === 0) {
            unset($nums[$i]);
            $nums[] = 0;
        }
    }
    return $nums;
}

print_r(moveZeroes([0,1,0,3,12]));
print_r(moveZeroes([0]));