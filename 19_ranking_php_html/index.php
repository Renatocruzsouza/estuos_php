<?php

$ranking = [
    "Renato" => 559,
    "Livia"  => 499,
    "Luisa"  => 317,
    "Vivi"   => 348,
    "Ivonei"  => 148,
    "Marcos"   => 248,
    "Joel"   => 48
];

arsort($ranking);


?>

<h1>Ranking:</h1>
<ol>
<?php foreach($ranking as $pessoa => $pontuacao):?>
    <li><?= $pessoa ?> => <?= $pontuacao ?> pontos</li>
<?php endforeach; ?>
</ol>