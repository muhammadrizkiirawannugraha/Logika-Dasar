<?php
// Terdapat sebuah variabel nilai
$nilai = 78;

// Logika untuk menghasilkan teks dengan warna
if ($nilai >= 76) {
    //  jika Output akan menghasilkan teks dengan warna hijau jika nilai lebih besar dari sebelumnya 
    echo "$nilai DINYATAKAN  <span style='color: green;'>KOMPETEN </span>";
} else {
    echo "$nilai DINYATAKAN  <span style='color: red;'>BELUM KOMPETEN </span>";
}
