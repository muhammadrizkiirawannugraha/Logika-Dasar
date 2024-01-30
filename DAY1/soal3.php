<?php
// Terdapat sebuah variabel yang menyimpan data tahun ini.
$year = 2006;

// Pengkondisian untuk menentukan jumlah hari bulan Februari.
if (($year % 4 == 0 )) {
    echo "Tahun $year, bulan Februari sampai dengan tanggal 29.";
} else {
    echo "Tahun $year, bulan Februari sampai dengan tanggal 28.";
}
?>
