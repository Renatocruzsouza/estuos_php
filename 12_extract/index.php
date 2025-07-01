<?php
 
$arr = [
    'cor' => 'vermelho',
    'forma' => 'retâgular',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";