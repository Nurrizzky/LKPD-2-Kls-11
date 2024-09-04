<?php 

$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ]
];

foreach ($student as $rata2 ) {
    $nama = $rata2['nama'];
    $nilai = $rata2['nilai'];
    $nilaiRata2 = array_sum($nilai) / count($nilai);
    
    echo $nama. " = ";
    echo $nilaiRata2;
    echo "<br>";
}

?>