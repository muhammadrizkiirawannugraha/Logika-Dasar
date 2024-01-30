<?php
function bandingkanNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

    echo "Jumlah karakter nama 1 ($nama1): $panjangNama1 <br>";
    echo "Jumlah karakter nama 2 ($nama2): $panjangNama2 <br>";

    if ($panjangNama1 > $panjangNama2) {
        $selisih = $panjangNama1 - $panjangNama2;
        echo "Nama 1 ($nama1) memiliki jumlah karakter lebih banyak daripada Nama 2 ($nama2). <br>";
        echo "Selisih jumlah karakter: $selisih <br>";
    } elseif ($panjangNama1 < $panjangNama2) {
        echo "Nama 2 ($nama2) memiliki jumlah karakter lebih banyak daripada Nama 1 ($nama1). <br>";
        $selisih = $panjangNama2 - $panjangNama1;
        echo "Selisih jumlah karakter: $selisih <br>";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama. <br>";
    }
}

// Contoh penggunaan
bandingkanNama("Rizki Irawan", "Astrina Saleh"); // nama output 12-13
?>