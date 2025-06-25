<?php

$arr = [
    [1, 2, 3],
    [2, 4, 6]
];

print_r($arr);
echo "<br>";

print_r($arr[0][1]); //Acessando primeiro array, e segundo elemento
echo "<br>";

print_r($arr[1][2]); // Acessando seguno array, e último elemento
echo "<br>";

print_r(count($arr));