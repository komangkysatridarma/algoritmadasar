<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="siswa">siswa</label>
    <input type= "text" name="siswa" id="siswa">
    <label for="kehadiran">kehadiran</label>
    <input type= "number" name="kehadiran" id="kehadiran">
    <label for="mtk">mtk</label>
    <input type= "number" name="mtk" id="mtk">
    <label for="dpk">dpk</label>
    <input type= "number" name="dpk" id="dpk">
    <label for="indo">indo</label>
    <input type= "number" name="indo" id="indo">
    <label for="ingg">ingg</label>
    <input type= "number" name="ingg" id="ingg">
    <label for="agama">agama</label>
    <input type= "number" name="agama" id="agama">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php

if($_POST){
    $siswa = $_POST['siswa'];
    $kehadiran = $_POST['kehadiran'];
    $mtk= $_POST['mtk'];
    $dpk= $_POST['dpk'];
    $indo= $_POST['indo'];
    $ingg= $_POST['ingg'];
    $agama= $_POST['agama'];
    $rata;
    $juara = 0;
    $siswa = array();   

   $rata = $mtk+$dpk+$indo+$ingg+$agama;

   for($i = 1; $i <= 15; $i++){
   if($rata >= 475 && $kehadiran = 100){
        if($rata > $juara){
            $siswa["siswa$i"] = $rata;
        }
   }
   echo "$siswa";
   if($siswa > 15){
    echo "$siswa,$juara";
   }
   }
}

?>