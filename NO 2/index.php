<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawr</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            gap: 20px;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>

    <div class="container">
        <form action="" method="POST">
            <label for="lamaKerja">Lama Kerja : </label>
            <input type="number" id="lamaKerja" name="lamaKerja" >
            <br>
            <br>
            <label for="lebihJam">Lebih Jam : </label>
            <input type="number" id="lebihJam" name="lebihJam">
            <br>
            <br>
            <button type="submit" name="btn-submit">Kirim</button>
        </form>
    </div>

<?php 

if (isset($_POST['btn-submit'])) {
    $jamKerja = 8;
    $lamaKerja = $_POST['lamaKerja'];
    $lebihJam = $_POST['lebihJam'];

    $kompensasiPertama = 50000;
    $kompensasiKedua = 25000;
    $jmlh = $kompensasiPertama + $kompensasiKedua * $lebihJam - $kompensasiKedua;

    echo "Lama kerja : " . $lamaKerja . " Jam";
    echo "<br>";
    echo "jam lebih : " . $lamaKerja - $jamKerja . " Jam";
    echo "<br>";
    echo "jumlah Kompensasi : " . "Rp " . number_format($jmlh, 0, ",", ".");
}

?>


</body>
</html>

