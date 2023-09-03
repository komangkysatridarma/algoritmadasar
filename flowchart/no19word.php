<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-image: url(ppp.svg);
            background-size: cover;
            background-repeat: repeat;
        }
        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container{
            width: 13rem;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            padding: 2rem 2rem;
            text-align: center;
            
        }
        .info{
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .input{
            height:45px;
            width:100%;
            border:none;
            outline:none;
            padding:0 0 0 45px;
            border-radius:16px;
            color:#fff;
            background: rgba(255,255,255,0.1);
            margin:0.5rem 0;
            font-size: 1rem;
            
        }
        span{
            color:#fff;
            margin-left: 2rem;
        }
        .submit{
            border:none;
            border-radius:16px;
            font-size:1rem;
            height:3rem;
            outline:none;
            width:89%;
            background:rgba(255,255,255,0.7);
            cursor:pointer;
        }
        .input-field1{
            display:flex;
            flex-direction:column;
            margin-left:3rem;
        }
        .tiket{
            width: 15rem;
            display: flex;
            justify-content: center;
            text-align: center;
            border-radius: 18px;
            background-color: #fff;
            margin: 2rem 0 2rem 3rem;
        }
        @media (max-width:450px){
            html {
            font-size: 70%;

        }
        }
    </style>
</head>
<body>
<div class="box">
    <div class="container">
        <form action="" method="post">
            <div class="info">
            <label for="vip"><span>Input vip</span></label>
            <input type= "text" name="vip" class="input" id="vip">
            <label for="eksekutif"><span>Input eksekutif</span></label>
            <input type= "text" name="eksekutif" class="input" id="eksekutif">
            <label for="ekonomi"><span>Input ekonomi</span></label>
            <input type= "text" name="ekonomi" class="input" id="ekonomi">
            </div>
            <div class="input-field1">
            <button type="submit" name="submit" class="submit">Submit</button>
            </div>
        </form>
        </div>

        <div class="tiket">
            <?php
        if($_POST){
            $vip = $_POST['vip'];
            $eksekutif = $_POST['eksekutif'];
            $ekonomi = $_POST['ekonomi'];
            $kategori_tiket;

            if($vip > 50 || $eksekutif > 50 || $ekonomi > 50){
                echo "Maksimal Tiket Hanya 50!";
            }
            if($kategori_tiket = $vip){
                if($vip >= 35){
                    $keuntungan_vip = 25;
                }
                elseif($vip < 35 && $vip >= 20){
                    $keuntungan_vip = 15;
                }
                elseif($vip < 20){
                    $keuntungan_vip = 5;
                }
            }

            if($kategori_tiket = $eksekutif){
                if($eksekutif >= 40){
                    $keuntungan_eksekutif = 20;
                }
                elseif($eksekutif >= 20 && $eksekutif < 40){
                    $keuntungan_eksekutif = 10;
                }
                elseif($eksekutif < 20){
                    $keuntungan_eksekutif = 2;
                }
            }

            if($kategori_tiket = $ekonomi){

                $keuntungan_ekonomi = 7;
            }
            if($vip <= 50 && $eksekutif <= 50 && $ekonomi <= 50){
            $keuntungan_keseluruhan = $keuntungan_vip + $keuntungan_eksekutif + $keuntungan_ekonomi;
            $total_tiket = $vip + $eksekutif + $ekonomi;

            echo "Keuntungan Vip: $keuntungan_vip% <br> Keuntungan eksekutif: $keuntungan_eksekutif% <br> Keuntungan ekonomi: $keuntungan_ekonomi%. <br>
                    Keuntungan Keseluruhan: $keuntungan_keseluruhan% <br> Vip: $vip <br> Eksekutif: $eksekutif <br> ekonomi: $ekonomi<br> Total Tiket: $total_tiket";
                }
        }

?>
         </div>
    
</div>
</body>
</html>