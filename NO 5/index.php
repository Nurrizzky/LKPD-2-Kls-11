<?php 

$var1 = [77, 55, 90, 80, 65, 89, 12, 86];
$var2 = [77, 55, 90];

// mengambil isi array yang sama 
$sama = array_intersect($var1, $var2);

// membandingkan seluruh nilai, kedua variabel
$array1 = array_diff($var1, $var2);
$array2 = array_diff($var2, $var1);
$tidakSama = array_merge($array1, $array2);

echo "<b>". "Bilangan yang ada di kedua variabel : " . "</b>"; 
echo "<br>";
echo implode(",", $sama);
echo "<br>";
echo "<b>". "Bilangan yang tidak ada di kedua Variabel : " ."</b>";
echo "<br>";
echo implode(",", $tidakSama);



?>
