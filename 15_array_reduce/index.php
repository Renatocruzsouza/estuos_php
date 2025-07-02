<?php

$arr = [1, 2, 19, 234, 15, 36, 5, 12];

function soma($a, $b) {
    return $a + $b;
}

function sub($a, $b) {
    return $a - $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";

$resultado2 = array_reduce($arr, "sub");

echo "$resultado2 <br>";