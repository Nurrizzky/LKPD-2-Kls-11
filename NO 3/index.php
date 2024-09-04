<?php 


for ($a=1; $a < 11; $a++) { 
    $result = $a * 5;
    if ($result % 2 == 1) {
        echo "$a x 5 = " . $result;
        echo "<br>";
    }
}


?>