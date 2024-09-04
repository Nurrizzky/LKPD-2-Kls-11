<?php 

function cari($data, $cari) {
    $jumlah = 0;
    foreach ($data as $key) {
        if ($key == $cari) {
            $jumlah++;
        } 
    }
    return $jumlah;
}


$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

$jumlahAngka = cari($data, $cari);
echo "Jumlah angka $cari = $jumlahAngka";


?>