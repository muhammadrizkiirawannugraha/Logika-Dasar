<?php
$angka = 22;

// Menggunakan if-else untuk menentukan tipe data dan menghasilkan output sesuai
// = : memberikan nilai pada variable
// == :perbandingan antara dua variable tanpa tipe data.
// === :perbandingan antara dua variable,mengecek tipe data.
if (is_string($angka)) {
    echo "\"$angka\" merupakan teks";
} else {
    echo "$angka merupakan bilangan";
}
?>
