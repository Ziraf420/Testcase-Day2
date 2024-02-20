<?php

$datas = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

print_r($datas);

$jumlahBaris = count($datas);
$jumlahKolom = count($datas[0]);

echo "Jumlah baris: " . $jumlahBaris . "\n"; 
echo "Jumlah kolom: " . $jumlahKolom . "\n"; 


$array = [
    ['status' => 0, 'mdn' => '081212313155'],
    ['status' => 1, 'mdn' => '081212313153'],
    ['status' => 0, 'mdn' => '081212313155'],
    ['status' => 1, 'mdn' => '081212313153'],
    ['status' => 0, 'mdn' => '081212313155'],
    ['status' => 0, 'mdn' => '081212313155'],
    ['status' => 0, 'mdn' => '081212313159'],
    ['status' => 1, 'mdn' => '081212313112'],
    ['status' => 1, 'mdn' => '081212313123'],
];

$totalAktif = 0;
$totalTidakAktif = 0;

foreach ($array as $data) {
    if ($data['status'] === 1) {
        $totalAktif++;
    } else {
        $totalTidakAktif++;
    }
}

$mdnSummary = [];

foreach ($array as $data) {
    $mdn = $data['mdn'];
    if (!isset($mdnSummary[$mdn])) {
        $mdnSummary[$mdn] = ['aktif' => 0, 'tidak_aktif' => 0];
    }

    if ($data['status'] === 1) {
        $mdnSummary[$mdn]['aktif']++;
    } else {
        $mdnSummary[$mdn]['tidak_aktif']++;
    }
}

// Tampilkan ringkasan
echo "\n";
echo "Total Aktif: " . $totalAktif . "\n";
echo "Total Tidak Aktif: " . $totalTidakAktif . "\n\n";

echo "Ringkasan per MDN:\n";
echo "| MDN | Aktif | Tidak Aktif |\n";
echo "|---|---|---|\n";

foreach ($mdnSummary as $mdn => $summary) {
    echo "| " . $mdn . " | " . $summary['aktif'] . " | " . $summary['tidak_aktif'] . " |\n";
}

?>
