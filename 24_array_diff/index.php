<?php

$arr = [1, 2, 3];
$arr2 = [2, 4, 6];

$diff = array_diff($arr, $arr2);

print_r($diff);
echo "<br>";
echo "<br>";

$diff = array_diff($arr2, $arr);

print_r($diff);
