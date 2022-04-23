<?php

function reverse(string $string): string
{
    $stringSize = strlen($string);
    $lastIndex = $stringSize - 1;
    if ($stringSize < 2) {
        return $string;
    }

    $reversedStr = [];
    for ($i = $lastIndex; $i >= 0; $i--) {
        $reversedStr[] = $string[$i];
    }
    return implode($reversedStr);
}

function reverse2(string $string): string
{
    return strrev($string);
}

echo reverse('Hi my name is Andrei') . "\n";
echo reverse2('Hi my name is Andrei') . "\n";
echo reverse('1') . "\n"; //if you pass 1 as a integer, it will throw exception because it expects a string in the input
echo reverse('') . "\n"; //return empty because it received an empty string