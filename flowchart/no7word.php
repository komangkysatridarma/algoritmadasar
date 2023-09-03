<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="gram">Input Gram</label>
    <input type= "text" name="gram" id="gram">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php

if($_POST){
    $gram = $_POST['gram'];

    $harga_sebelum = 500 * $gram;
    $diskon = 5 * $harga_sebelum / 100;
    $harga_setelah = $harga_sebelum - $diskon;

    echo "Gram: $gram <br> Harga Sebelum Diskon: $harga_sebelum <br> Diskon: $diskon <br> Harga setelah diskon: $harga_setelah";
}

?>