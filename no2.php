<?php
$array = [1, 2, 3, 4, 5];

array_push($array, 6);

echo "Array setelah menambahkan 6:\n";
print_r($array); // Output: [1, 2, 3, 4, 5, 6]

$firstElement = array_shift($array);

echo "\nArray setelah menghapus elemen pertama: ";
print_r($array); // Output: [2, 3, 4, 5, 6]

echo "\nIndex yang dihapus: " . $firstElement; // Output: Index yang dihapus: 1

echo "Index ke 2 setelah di gandakan: \n";
$array[1] *= 2;
print_r($array);

echo "Array sebelum di bagi menjadi 2 bagian: \n";
print_r($array);

echo "Array setelah di bagi menjadi 2 bagian: \n";
$firstHalf = array_slice($array, 0, 2); // Correct usage of array_slice()
$secondHalf = array_slice($array, 2);

print_r($firstHalf); // Added parentheses for print_r
print_r($secondHalf);
