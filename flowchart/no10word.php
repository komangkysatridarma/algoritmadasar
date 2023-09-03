<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="mtk">Input mtk</label>
    <input type= "text" name="mtk" id="mtk">
    <label for="dpk">Input dpk</label>
    <input type= "text" name="dpk" id="dpk">
    <label for="agama">Input agama</label>
    <input type= "text" name="agama" id="agama">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php

if($_POST){
    $mtk = $_POST['mtk'];
    $dpk = $_POST['dpk'];
    $agama = $_POST['agama'];
    $rata = ($mtk + $dpk + $agama) /3;

    if($rata <= 100 && $rata >= 80){
        echo "Grade : A";
    }
    elseif($rata < 80 && $rata >= 75){
        echo "Grade : B";
    }
    elseif($rata < 75 && $rata >= 65){
        echo "Grade : C";
    }
    elseif($rata < 65 && $rata >= 45 ){
        echo "Grade : D";
    }
    elseif($rata < 45 && $rata >= 0 ){
        echo "Grade : E";
    }
    else{
        echo "Tidak Memenuhi Persyaratan";
    }
}

?>