<?php
$strings = ['a', 'b', 'c', 'd'];

array_push($strings, 'e'); //O(∑ var_i, for all i)
//$strings[] = 'e'; is faster

array_pop($strings); //removes last one

array_unshift($strings, 'x'); //add to the beginning, O(n)

array_splice($strings, 2, 0, 'alien'); // O(n)