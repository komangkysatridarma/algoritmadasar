<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="fahrenhite">Input fahrenhite</label>
    <input type= "text" name="fahrenhite" id="fahrenhite">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php

if($_POST){
    $fahrenhite = $_POST['fahrenhite'];
    $suhu_celcius = $fahrenhite / 33.8;

    if($suhu_celcius > 300){
        echo "Panas";
    }
    elseif($suhu_celcius < 250){
        echo "Dingin";
    }
    else{
        echo "Normal";
    }
}

?>