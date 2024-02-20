<?php
//fungsi array_push
$array = [1, 2, 3, 4, 5];

array_push($array, 6);

echo "Array setelah menambahkan 6:\n";
print_r($array); 

//fungsi array_pop
$fruits = ['apel', 'pisang', 'jeruk', 'mangga'];

// Menghapus dan mengembalikan elemen terakhir ("mangga")
$last_fruit = array_pop($fruits);

print_r($fruits); 
echo $last_fruit; 
