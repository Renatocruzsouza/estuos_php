<?php

$arr = ["banana", "maçã", "batata", "pêra", "mamão"];

if(in_array("batata", $arr)) {
    echo "Há o item batata no array";
} else {
    echo "Item não encontardo";
}
echo "<br>";
echo "<br>";

$b = "banana";

if(in_array($b, $arr)) {
    echo "Há o item banana no array";
} else {
    echo "Item não encontardo";
}

echo "<br>";
echo "<br>";

if(in_array("teste", $arr)) {
    echo "Há o item teste no array";
} else {
    echo "Item não encontardo";
}