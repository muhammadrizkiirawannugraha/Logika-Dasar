<?php
function formatNumber($number) {
    if ($number < 1000) {
        // Jika angka kurang dari 1000, tidak perlu diubah
        echo $number;
    } elseif ($number < 1000000) {
        // Jika angka di antara 1000 dan 999999, ubah ke format ribuan (K)
        echo number_format($number / 1000, 1) . "K";
    } else {
        // Jika angka lebih dari atau sama dengan 1000000, ubah ke format jutaan (M)
        echo number_format($number / 1000000, 1) . "M";
    }
}

formatNumber(9500);
echo "<br>";
formatNumber(1700000);
?>
