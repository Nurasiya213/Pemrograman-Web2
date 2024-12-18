<?php
// Membuat fungsi untuk menghitung faktorial
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

// Memanggil fungsi faktorial dengan nilai 5
$angka = 5;
echo "Faktorial dari " . $angka . " = " . faktorial($angka);
?>
