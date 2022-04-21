<?php

// What is the Big O of the below function? (Hint, you may want to go line by line)
function funChallenge($input)
{
    $a = 10;
    $a = 50 + 3;
    $inputSize = count($input);
    for ($i = 0; $i < $inputSize; $i++) {
        anotherFunction();
        $stranger = true;
        $a++;
    }
    return $a;
}

function anotherFunction()
{

}

//answer O(n), n being the size of the $input