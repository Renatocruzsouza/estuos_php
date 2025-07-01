<?php

$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto_solar' => true,
    'câmbio' => 'manual',
    'portas' => 4
];

$chaves = array_keys($carro);

print_r($chaves);
echo "<br>";
echo "<br>";

$valores = array_values($carro);

print_r($valores);