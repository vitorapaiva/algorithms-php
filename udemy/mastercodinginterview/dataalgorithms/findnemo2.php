<?php

$nemo = array_fill(0, 10, 'nemo');

function findNemo(array $nemo) {
    $start = new DateTime();
    $arraySize = count($nemo);
    for ($i = 0; $i < $arraySize; $i++) {
        if ($nemo[$i] === 'nemo') {
            echo 'Found Nemo';
        }
    }

    echo "\n";
    $end = new DateTime();
    echo $start->diff($end)->f;
}

findNemo($nemo);