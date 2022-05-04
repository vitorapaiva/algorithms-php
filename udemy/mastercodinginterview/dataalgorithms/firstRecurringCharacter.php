<?php

function firstRecurringCharacter(array $array):mixed {
    $auxArray = [];
    foreach($array as $index => $value) {
        if(array_key_exists($value, $auxArray)) {
            return $value;
        }
        $auxArray[$value] = $index;
    }
    return null;
}

echo firstRecurringCharacter([2,5,1,2,3,5,1,2,4])."\n";
echo firstRecurringCharacter([2,1,1,2,3,5,1,2,4])."\n";
echo firstRecurringCharacter([2,3,4,5])."\n";