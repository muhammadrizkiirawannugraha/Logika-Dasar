<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Menggabungkan dua array
$gabung = array_merge($bil1, $bil2);

// Mengambil nilai unik
$hasilUnik = array_unique($gabung);

// Mengurutkan nilai dari terbesar ke terkecil
rsort($hasilUnik);

// Menampilkan hasil
echo "Hasil: " . implode(', ', $hasilUnik) . "\n";
?>
