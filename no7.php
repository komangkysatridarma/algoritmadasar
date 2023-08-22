<!DOCTYPE html>
<html>

<head>
    <title>Pencarian Juara Kelas</title>
</head>

<body>
    <h1>Pencarian Juara Kelas</h1>
    <form method="post" action="">
        <?php
        $totalSiswa = 15;

        for ($i = 1; $i <= $totalSiswa; $i++) {
            echo "<h2>Siswa $i</h2>";
            echo "<label>Nama Siswa:</label>";
            echo "<input type='text' name='namaSiswa[]'><br>";
            echo "<label>Nilai MTK:</label>";
            echo "<input type='number' name='nilaiMTK[]'><br>";
            echo "<label>Nilai ING:</label>";
            echo "<input type='number' name='nilaiING[]'><br>";
            echo "<label>Nilai IND:</label>";
            echo "<input type='number' name='nilaiIND[]'><br>";
            echo "<label>Nilai DPK:</label>";
            echo "<input type='number' name='nilaiDPK[]'><br>";
            echo "<label>Nilai AGM:</label>";
            echo "<input type='number' name='nilaiAGM[]'><br>";
            echo "<label>Kehadiran:</label>";
            echo "<input type='number' name='kehadiran[]'><br>";
        }
        ?>
        <input type="submit" name="submit" value="Cari Juara">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $siswaJuara = 0;

        for ($i = 0; $i < $totalSiswa; $i++) {
            $totalNilai = $_POST['nilaiMTK'][$i] + $_POST['nilaiING'][$i] + $_POST['nilaiIND'][$i] + $_POST['nilaiDPK'][$i] + $_POST['nilaiAGM'][$i];
            $kehadiran = $_POST['kehadiran'][$i];

            if ($totalNilai >= 475 && $kehadiran == 100) {
                $siswaJuara++;
            }
        }

        echo "<h2>Jumlah Siswa Juara: $siswaJuara</h2>";
    }
    ?>
</body>

</html>