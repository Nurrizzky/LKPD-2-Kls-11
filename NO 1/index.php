<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO 1</title>
</head>
<body>

    <form action="" method="POST" >
    
        <label for="text">Input Text</label>
        <input type="text" id="text" name="text">
        <button type="submit" name="btn">Cek</button>
    
    </form>

<?php 

if (isset($_POST['btn'])) {

    $inputText = $_POST['text'];
    preg_match_all('/\d/', $inputText, $result);
        if (!empty($result[0])) {
            echo "Angka yang Ditemukan adalah : " . implode(",", $result[0]);
        }else {
            echo "Angka tidak dapat ditemukan";
        }
}

?>

</body>
</html>