<?php
// Panjang dan lebar tanah
$panjang_tanah = 13;
$lebar_tanah = 9;

// Menghitung luas tanah
$luas_tanah = $panjang_tanah * $lebar_tanah;

// Menentukan tipe rumah berdasarkan luas tanah
if ($luas_tanah < 90) {
    $tipe_rumah = "Tipe 36";
} elseif ($luas_tanah >= 90 && $luas_tanah < 96) {
    $tipe_rumah = "Tipe 45/";
} elseif ($luas_tanah >= 96 && $luas_tanah < 120) {
    $tipe_rumah = "Tipe 54";
} elseif ($luas_tanah >= 120 && $luas_tanah < 150) {
    $tipe_rumah = "Tipe 60";
} else {
    $tipe_rumah = "Tipe 70";
}

// Menampilkan hasil
echo "Luas tanah Rumah: " . $luas_tanah . " m2" . PHP_EOL;
echo "Tipe rumah yang akan dibangun: " . $tipe_rumah . PHP_EOL;
?>
