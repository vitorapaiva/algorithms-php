<?php
function flippingMatrix($matrix) {
    $arrSize = count($matrix);
    $sum = 0;
    for($line=0;$line<$arrSize; $line++) {
        for($column = 0; $column < $arrSize; $column++) {
            for($x=$column+1; $x < $arrSize; $x++) {
                if($matrix[$line][$column] < $matrix[$line][$x]) {
                    $aux = $matrix[$line][$column];
                    $matrix[$line][$column] = $matrix[$line][$x];
                    $matrix[$line][$x] = $aux;
                }
            }
        }
    }

    for($column=0;$column<$arrSize; $column++) {
        for($line = 0; $line < $arrSize; $line++) {
            for($x=$line+1; $x < $arrSize; $x++) {
                if($matrix[$line][$column] < $matrix[$x][$column]) {
                    $aux = $matrix[$line][$column];
                    $matrix[$line][$column] = $matrix[$x][$column];
                    $matrix[$x][$column] = $aux;
                }
            }
        }
    }

    $firstQuadrantSize = $arrSize/2;
    for($i=0; $i<$firstQuadrantSize; $i++) {
        for($x=0; $x<$firstQuadrantSize; $x++) {
            $sum += $matrix[$i][$x];
        }
    }

    return $sum;
}