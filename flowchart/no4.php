<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="int">int</label>
    <input type= "text" name="int" id="int">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php

if($_POST){
    $int = $_POST['int'];
    $td;

    $jam = floor($int / 3600);
    $sisadetik = $int % 3600;
    $menit = floor($sisadetik / 60);
    $detik = $sisadetik % 60;

    echo "Hasil : $jam jam $menit menit $detik detik";


}

?>