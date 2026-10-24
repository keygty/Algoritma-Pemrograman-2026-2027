<?php
$harga  = 250_000;
$qty    = 3;
$diskon = 0.15;

$total  = $harga * $qty;
$bayar  = $total - ($total * $diskon);
$akhir = $bayar + ($bayar * 0.10);   // baru
$ongkir = $bayar >= 500_000 ? "Gratis" : "Rp 20,000";

echo "Total belanja = Rp " . number_format($total) . "\n";
echo "Setelah diskon = Rp " . number_format($bayar) . "\n";
echo "Setelah Pajak = Rp " . number_format($akhir) . "\n";  // baru
echo "Ongkir = " . $ongkir;