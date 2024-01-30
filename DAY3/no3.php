<?php
// Deklarasi variabel
$hari = date('l');
$hargaNasiGoreng = 15000;
$hargaAyamBakar = 20000;
$hargaNasiKebuli = 25000;

// Hitung total harga
$totalHarga = $hargaNasiGoreng * 2 + $hargaAyamBakar + $hargaNasiKebuli * 2;


// Cek hari
if ($hari == "Friday") {
    // Diskon 5%
    $diskon = $totalHarga * 0.05;
    $totalHarga = $totalHarga - $diskon;
} else if ($hari == "Monday") {
    // Diskon 2%
    $diskon = $totalHarga * 0.02;
    $totalHarga = $totalHarga - $diskon;
}

// Tapmilkan hasil
echo "Total harga yang harus dibayar Dani adalah Rp. " . $totalHarga;
?>