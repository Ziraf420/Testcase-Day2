<?php
//Filtering berdasarkan nilai tertentu
$data = [1,2,3,4,5,6,7,8,9];
$threshold = 5;

$filtered_array = array_filter($data, function($element) use ($threshold) {
  return $element > $threshold;
});

print_r($filtered_array);

//Filtering berdasarkan kriteria
$datas = [
  ['nama' => 'Rae', 'usia' => 28],
  ['nama' => 'Eva', 'usia' => 21],
  ['nama' => 'Emily', 'usia' => 20],
];

// Filter berdasarkan usia
$filtered_array = array_filter($datas, function($element) {
  return $element['usia'] < 21;
});

print_r($filtered_array); 

// Filter berdasarkan nama
$filtered_array = array_filter($datas, function($element) {
  return $element['nama'] === 'Rae';
});

print_r($filtered_array); 
