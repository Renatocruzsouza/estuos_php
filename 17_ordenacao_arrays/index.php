<?php

$arr = [2, 1, 334, 32, 123, 6, 25, 999, 8];

sort($arr);

print_r($arr);
echo "<br>";
echo "<br>";

$arr2 = [2, 1, 334, 32, 123, 6, 25, 999, 8];

rsort($arr);
print_r($arr2);
echo "<br>";
echo "<br>";

$nomes = ["Renato", "Livia", "Luisa", "Vivi", "Carlos", "Ana", "Bruno", "Mariana"];

rsort($nomes);
print_r($nomes);