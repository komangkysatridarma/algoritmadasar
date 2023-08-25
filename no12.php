
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hitung</title>
</head>
<style>
*{
    font-family:'Popins', sans-serif;
    text-decoration:none;
    color:#fff;
}
body{
    background-image:url("img/wave-haikei (1).svg");
    background-size:cover;
    background-repeat:repeat;
}
.box{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:90vh;
}
.container{
    width:350px;
    display:flex;
    flex-direction:column;
    padding:0 15px 0 15px;
}
header{
    color:#fff;
    font-size:30px;
    display:flex;
    justify-content:center;
    padding:10px 0 10px 0;
}
.input-field{
    display:flex;
    flex-direction:column;
    margin:10px 0;
}
.input-field1{
    display:flex;
    flex-direction:column;
    margin-left:30px;
}
.input{
    height:45px;
    width:100%;
    border:none;
    outline:none;
    padding:0 0 0 45px;
    border-radius:30px;
    color:#fff;
    background: rgba(255,255,255,0.1);
}
::-webkit-input-placeholder{
    color:#fff;
}
.submit{
    margin-bottom: 1rem;
    border:none;
    border-radius:30px;
    font-size:15px;
    height:45px;
    outline:none;
    width:89%;
    background:rgba(255,255,255,0.7);
    cursor:pointer;
    transition:.3s;
}
.submit:hover{
    box-shadow:1px 5px 7px 1px rgba(0,0,0,0.2);
}
p{
    color:red;
    font-style:italic;
}
a{
    margin-top:10px;
}
.waktu{
    margin-left: 9rem;
}
</style>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Hitung</header>
            </div>

            <form action="" method="post">
                <div class="input-field">
                    <input type="number" name="hh" class="input" placeholder="Jam" required>
                </div>
                <div class="input-field">
                <input type="number" name="mm" class="input" placeholder="Menit" required>
                </div>
                <div class="input-field">
                <input type="number" name="ss" class="input" placeholder="Detik" required>
                </div>
                <div class="input-field1">
                <button type="submit" name="hitung" class="submit">Hitung</button>
                </div>
                <div class="waktu">
                <?php

if($_POST){
    $hh = $_POST['hh'];
    $mm = $_POST['mm'];
    $ss = $_POST['ss'];

    $ss = $ss + 1;

    if($ss >= 60){
        $mm++ && $ss = 0;

        if($mm >= 60){
            $hh++ && $mm = 0 && $ss = 0;
        }
        else if($hh >= 24){
            $hh = 0;
            $mm = 0;
            $ss = 0;
        }    
    }

    echo "$hh:$mm:$ss";


}

?> 
</div>
            </form>
        </div>
    </div>
</body>
</html>