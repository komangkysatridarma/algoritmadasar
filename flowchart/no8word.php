<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="bilangan">Input bilangan</label>
    <input type= "text" name="bilangan" id="bilangan">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php

if($_POST){
    $bilangan = $_POST['bilangan'];

    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10) % 10;
    $ratusan = $bilangan / 100 % 10;

    echo "Bilangan: $bilangan <br> Satuan: $satuan <br> Puluhan: $puluhan <br> Ratusan: $ratusan";
}

?>