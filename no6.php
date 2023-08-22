<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai Siswa</title>
</head>
<body>
    <form action="" method="post">
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <label for="">Nilai Siswa <?php echo $i; ?>:</label>
            <input type="text" name="nilai[]" id=""><br>
        <?php } ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_POST) {
    if(isset($_POST["nilai"])) {
        $ns = $_POST["nilai"];

        // Mencari nilai tertinggi
        $nt = max($ns);

        echo "Nilai tertinggi adalah: $nt";
    } else {
        echo "Tidak ada data nilai yang diterima.";
    }
}
?>