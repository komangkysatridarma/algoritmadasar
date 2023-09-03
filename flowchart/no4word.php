<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="nama">Nama</label>
    <input type= "text" name="nama" id="nama">
    <label for="gaji">Gaji</label>
    <input type= "number" name="gaji" id="gaji">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php

if($_POST){
    $gaji = $_POST['gaji'];
    $nama = $_POST['nama'];

    $tunjangan = (20 * $gaji) / 100;
    $pajak = (15 * ($gaji + $tunjangan)) /100;
    $gaji_bersih = $gaji + $tunjangan - $pajak;

    echo "Gaji anda: $gaji <br> Nama Anda: $nama <br> Tunjangan Anda: $tunjangan <br> Pajak Anda: $pajak <br> Gaji Bersih Anda: $gaji_bersih";
}

?>