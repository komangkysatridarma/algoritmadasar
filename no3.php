<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="jam">jam</label>
    <input type= "text" name="jam" id="jam">
    <label for="menit">menit</label>
    <input type= "text" name="menit" id="menit">
    <label for="detik">detik</label>
    <input type= "text" name="detik" id="detik">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php

if($_POST){
    $jam = $_POST['jam'];
    $menit= $_POST['menit'];
    $detik= $_POST['detik'];
    $td;

    if($td = $jam * 3600 + $menit * 60 + $detik){
        echo "$td Detik";
    }

}

?>