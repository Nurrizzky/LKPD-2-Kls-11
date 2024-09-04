<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 9</title>
</head>
<body>

    <form action="" method="post">
        <input type="number" name="uang" id="uang">
        <button type="submit" name="btn">Cek</button>
    </form>

</body>
</html>

<?php 

if (isset($_POST['btn'])) {
    $uang = $_POST['uang'];
    $data = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200];
    
    echo "Uang : Rp " . number_format($uang);
    foreach ($data as $dataUang) {
        $lembar = intval($uang / $dataUang);
        $uang %= $dataUang;
        echo "<ul>";

        if ($lembar > 0) {
            echo "<li> Pecahan " . number_format($dataUang) . " = " . $lembar ."</li>";
        }
        echo "</ul>";
    }
}

?>