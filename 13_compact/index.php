<?php

$marca = "Porshe";
$motor = "3.0";
$tetoSolar = true;
$portas = 4;

$carro = compact("marca", "motor", "tetoSolar", "portas");

print_r($carro);

echo "<br>";
echo "<br>";

$raca = "vira-lata";
$nome = "Zeca";
$idade = 3;
$cor = "caramelo";

$zeca = compact("raca","nome", "idade", "cor");

print_r($zeca);
echo "<br>";
echo "<br>";

foreach($zeca as $caracteristicas => $value) {
    echo " $caracteristicas: $value";
}