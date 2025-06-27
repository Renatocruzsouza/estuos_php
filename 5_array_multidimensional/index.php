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
echo "<br>";

$arr2 = [
    [1, 2, 3, 4],
    [2, 4, 6, 8],
    [3, 6, 9, 12]
];
// loop no array externo
for($i =0; $i < count($arr2); $i++) {

    // Imprimindo array
    echo"Imprimindo array externo:" . ($i + 1);
    echo "<br>";

    // Imprimindo o array interno

    for($j = 0; $j < count($arr2[$i]); $j++) {

        echo $arr2[$i][$j];
        echo "<br>";

    }
}