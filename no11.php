
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
    border:none;
    border-radius:30px;
    font-size:15px;
    height:45px;
    outline:none;
    width:89%;
    background:rgba(255,255,255,0.7);
    cursor:pointer;
    transition:.3s;
    margin-bottom: 2rem;
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
.no{
    margin-left: 5rem;
}
</style>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Hitung No Pegawai</header>
            </div>

            <form action="" method="post">
                <div class="input-field">
                    <input type="number" name="no_pegawai" class="input" placeholder="No Pegawai" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field1">
                <button type="submit" name="hitung" class="submit">Hitung</button>
                </div>
                <div class="no">
                <?php

                    if($_POST){
                        $no_pegawai = $_POST['no_pegawai'];
                        $bulan;

                    if($no_pegawai < 11){
                        echo "No Pegawai Tidak Sesuai!";
                    }
                    else{
                        $no_golongan = substr($no_pegawai, 0, 1);
                        $tanggal = substr($no_pegawai, 1, 2);
                        $bulan = substr($no_pegawai, 3, 2);
                        $tahun = substr($no_pegawai, 5, 4);
                        $no_urutan = substr($no_pegawai, 9, 2);
                    }
                    
                    if($bulan == "01"){
                        $bulan = "Januari";
                    }
                    else if($bulan == "02"){
                        $bulan = "Februari";
                    }
                    else if($bulan == "03"){
                        $bulan = "Maret";
                    }
                    else if($bulan == "04"){
                        $bulan = "April";
                    }
                    else if($bulan == "05"){
                        $bulan = "Mei";
                    }
                    else if($bulan == "06"){
                        $bulan = "Juni";
                    }
                    else if($bulan == "07"){
                        $bulan = "Juli";
                    }
                    else if($bulan == "08"){
                        $bulan = "Agustus";
                    }
                    else if($bulan == "09"){
                        $bulan = "September";
                    }
                    else if($bulan == "10"){
                        $bulan = "Oktober";
                    }
                    else if($bulan == "11"){
                        $bulan = "November";
                    }
                    else{
                        $bulan = "Desember";
                    }

                    $tanggal_lahir = $tanggal . $bulan . $tahun;

                    echo "Pegawai Bergolongan $no_golongan, <br>Lahir pada tanggal $tanggal_lahir, <br>Ber nomor urutan $no_urutan";
                    }

                    ?>  
                </div>
            </form>
        </div>
    </div>
</body>
</html>