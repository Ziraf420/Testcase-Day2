<?php
$array1 = [1, 2, 3, 4, 5];
echo "Array 1: ";
print_r($array1);

echo "Elemen ketiga dari array: " . $array1[2] . "\n";

echo "Jumlah elemen dalam array: " . count($array1) . "\n";

$array2 = [6, 7, 8, 9, 10];
echo "Array 2: ";
print_r($array2);

$mergedArray = array_merge($array1, $array2);
echo "Array gabungan: ";
print_r($mergedArray);

echo "Nilai maksimum dalam array gabungan: " . max($mergedArray) . "\n";
