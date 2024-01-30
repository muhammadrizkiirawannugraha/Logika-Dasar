<?php
// Deklarasi variabel
$usia = 20;

// Cek rentang usia
if ($usia >= 12 && $usia <= 18) {
  // Usia 12-18 tahun
  echo "Waktu tidur yang baik adalah 8-9 jam.";
} elseif ($usia >= 18 && $usia <= 40) {
  // Usia 18-40 tahun
  echo "Waktu tidur yang baik adalah 7-8 jam.";
} else {
  // Usia di luar rentang 12-40 tahun
  echo "Waktu tidur yang baik tidak diketahui.";
}

