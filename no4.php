<?php
$data = [
    ["nama" => "Budi Giarhano", "usia" => 25],
    ["nama" => "Ana Ladaina", "usia" => 23],
    ["nama" => "Mark Marquez", "usia" => 28]
];

echo $data[0]["nama"] . "\n"; 
echo $data[0]["usia"] . "\n";

$data[] = ["nama" => "Cika Andini", "usia" => 21];

echo "Jumlah data: " . count($data) . "\n"; 

echo $data[3]["nama"] . "\n"; 
