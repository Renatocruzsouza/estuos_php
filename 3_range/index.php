<?php

$arr = range(1,10);

print_r($arr);
echo "<br>";

$arr2 = range(5,20);

print_r($arr2);
echo "<br>";

$arr3 = range(0,1000, 100);

print_r($arr3);

// exercicio 

$arr4 = range(10, 45);

for($i = 0; $i < count($arr4); $i++ ) {

    $soma = $arr4[$i]+ 6;


    if ($soma > 30) {

        echo "O número $soma é muito alto <br>";

    } else {
        echo "$soma <br>";
    }
}



