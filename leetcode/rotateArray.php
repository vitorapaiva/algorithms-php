<?php
function rotateArray(array $array, int $steps): array
{
    for ($i = 0; $i < $steps; $i++) {
        $array = [array_pop($array), ...$array];
    }

    return $array;
}

print_r(rotateArray([1,2,3,4,5,6,7], 3));
print_r(rotateArray([-1,-100,3,99], 2));