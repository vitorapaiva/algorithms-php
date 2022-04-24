<?php

function constainsDuplicate(array $nums): bool {
    $auxArray = [];
    foreach($nums as $num) {
        if(array_key_exists($num, $auxArray)) {
            return true;
        }
        $auxArray[$num] = $num;
    }
    return false;
}

echo constainsDuplicate([1,2,3,1])."\n";
echo constainsDuplicate([1,2,3,4])."\n";
echo constainsDuplicate([1,1,1,3,3,4,3,2,4,2])."\n";