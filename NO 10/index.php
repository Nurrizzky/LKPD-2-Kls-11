<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



</body>
</html>

<?php 

$umur = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

$dewasa = 0;
$anak_anak = 0;

foreach ($umur as $key) {
    if ($key >= 17) {
        $dewasa++;
    }elseif($key < 17) {
        $anak_anak++;
    }
}

echo "List Usia : " . implode(',',$umur);
echo "<br>";
echo "Usia kategori dewasa : $dewasa";
echo "<br>";
echo "Usia kategori anak anak : $anak_anak";


?>