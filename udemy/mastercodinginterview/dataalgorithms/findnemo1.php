<?php

const NEMO = ['nemo'];

function findNemo(array $nemo) {
    $arraySize = count($nemo);
    for ($i = 0; $i < $arraySize; $i++) {
        if ($nemo[$i] === 'nemo') {
            print_r('Found Nemo');
        }
    }
}

findNemo(NEMO);