<?php
$data = [
    "nama" => "Valentino Rossi", 
    "usia" => 46,
    "alamat" => "Jl. Pegangsaan Timur No. 16, Jakarta" 
];

echo "Usia: " . $data["usia"] . " tahun\n"; 

$data["alamat"] = "Jl. Sudirman No. 38, Makassar"; 

echo "Alamat baru: " . $data["alamat"] . "\n"; 
