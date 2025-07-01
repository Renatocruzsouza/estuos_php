<?php

//dividindo arrays, com a funçao array_chunk

$arr = range(1,20);

print_r(array_chunk($arr, 4));
echo "<br>";
echo "<br>";

$arrays = array_chunk($arr, 10);
print_r($arrays);

echo "<br>";
echo "<br>";

print_r($arrays[1]);