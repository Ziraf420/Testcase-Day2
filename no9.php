<?php
//Fungsi Array_filter
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

//Fungsi Array_map

$data = [11, 22, 33, 44, 55];

$doubled_data = array_map(function($value) {
  return $value * 2;
}, $data);

print_r($doubled_data); 
