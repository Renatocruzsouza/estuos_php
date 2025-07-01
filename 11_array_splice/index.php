<?php

// resgatar elementos de array 
// remover elementos

$arr = [1, 2, 3, 4, 5, 6];

$removidos = array_splice($arr, 1, 2);

print_r($arr);
echo "<br>";
echo "<br>";

print_r($removidos);
echo "<br>";
echo "<br>";


$arr2 = [1, 2, 3, 4, 5, 6];

$removidos2 = array_splice($arr2, 3);

print_r($arr2);
echo "<br>";
echo "<br>";

print_r($removidos2);


