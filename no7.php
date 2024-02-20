<?php
$data = [1,2,3,4,5,6,7,8,9];
$target = 5;

if (in_array($target, $data)) {
  echo "Nilai $target ditemukan dalam array.\n";
} else {
  echo "Nilai $target tidak ditemukan dalam array.\n";
}

$index = array_search($target, $data);

if ($index === false) {
  echo "Nilai $target tidak ditemukan dalam array.\n";
} else {
  echo "Nilai $target ditemukan pada index $index.\n";
}
?>