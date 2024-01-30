<?php
$tahunKelahiran = 2010;

// Menghitung usia sekarang
$usiaSekarang = date('Y') - $tahunKelahiran;

// Menggunakan pengkondisian untuk menampilkan teks yang sesuai
if ($usiaSekarang >= 17) {
    //Jika $tahunKelahiran = 2004 (usia sekarang = 18 tahun), maka pesan pertama akan dicetak.
// Jika $tahunKelahiran = 2003 (usia sekarang = 14 tahun), maka pesan kedua akan dicetak.
    echo "Tahun kelahiran $tahunKelahiran sudah dapat memiliki KTP. Usia sekarang = $usiaSekarang.";
} else {
    echo "Tahun kelahiran $tahunKelahiran belum dapat memiliki KTP.";
}
?>
