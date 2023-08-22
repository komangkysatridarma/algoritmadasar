<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label for="x">x</label>
    <input type= "number" name="x" id="x">
    <label for="y">y</label>
    <input type= "number" name="y" id="y">
    <label for="z">z</label>
    <input type= "number" name="z" id="z">
    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>

<?php
if($_POST){
    $x = $_POST['x'];
    $y= $_POST['y'];
    $z= $_POST['z'];

if($x >= $y && $x >= $z){
    echo "$x";
}
else if($y >= $x && $y >= $z){
    echo "$y";
}
else if($z >= $x && $z >= $y){
    echo "$z";
}
}
?>