<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO 7</title>
</head>
<body>

<form action="" method="POST">
    <label for="ke1" >Input Ke 1</label>
    <input type="text" id="ke1" name="ke1">
    <br>
    <label for="ke2">input ke 2</label>
    <input type="text" id="ke2" name="ke2">
    <button type="submit" name="btn">Cek</button>
</form>


</body>
</html>

<?php 

if (isset($_POST['btn'])) {
    $input1 = $_POST['ke1'];
    $input2 = $_POST['ke2'];

    $hasil1 = strlen($input1);
    $hasil2 = strlen($input2);
    $selisih = abs($hasil1 - $hasil2);

    if ($hasil1 > $hasil2) {
        echo "$input1 Memiliki jumlah karakter lebih banyak dari $input2 : selesih $selisih Karakter";
    }else if($hasil1 == $hasil2) {
        echo "$input1 Memiliki jumlah karakter yang sama dengan $input2 : selesih $selisih Karakter";
    }else {
        echo "$input1 Memiliki jumlah karakter sedikit banyak dari $input2 : selesih $selisih Karakter";
    }
}


?>