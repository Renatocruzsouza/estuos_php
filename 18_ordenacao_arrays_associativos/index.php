<?php

$pessoas = [
    "Renato" => 19,
    "Livia"  => 18,
    "Luisa"  => 17,
    "Vivi"   => 48
];

/// ordem crescente (valor)

asort($pessoas);
print_r($pessoas);
echo "<br>";
echo "<br>";

// ordem decrescente (valor)

arsort($pessoas);
print_r($pessoas);
echo "<br>";
echo "<br>";

// ordem crescente (pelas chaves) 

ksort($pessoas);
print_r($pessoas);
echo "<br>";
echo "<br>";

// ordem decrescente (pelas chaves)
krsort($pessoas);
print_r($pessoas);