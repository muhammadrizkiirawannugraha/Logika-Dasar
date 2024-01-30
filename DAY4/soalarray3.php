<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];

// Fungsi untuk menghitung total uang yang perlu dibayar
function hitungTotal($barang)
{
    $total = 0;

    foreach ($barang as $item) {
        $total += $item['harga_barang'] * $item['jumlah_beli'];
    }

    return $total;
}

// Hitung total uang yang perlu dibayar
$total_pembayaran = hitungTotal($barang);

// Hasilnya
echo "Total uang yang perlu dibayar oleh Andi: $total_pembayaran";

?>
