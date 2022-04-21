<?php

function checkIfHasCommonItems($array1, $array2): bool {
    $auxArray = [];
    foreach($array1 as $item) {
        $auxArray[$item] = true;
    }

    foreach($array2 as $item) {
        if(array_key_exists($item, $auxArray)) {
            return true;
        }
    }

    return false;
}

echo checkIfHasCommonItems([1,2,3], [2,3,1]);
echo checkIfHasCommonItems(['c',null,'b'], [4,5,9,0,null,1,3,4]);
echo checkIfHasCommonItems(['c',null,'b'], []);