<?php

$pessoa = ["Renato", 19, "Programador", "castanhos"];

print_r($pessoa);

echo "<br>";
list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$corDosOlhos <br>";