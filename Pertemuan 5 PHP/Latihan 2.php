<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Panjang : </label>
        <input type="number" name="pjg"><br>
        <label for="">Lebar</label>
        <input type="number" name="lbr"><br>
        <button name="submit" type="submit">Hitung</button>
    </form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
    $panjang = $_POST['pjg'];
    $lebar = $_POST['lbr'];

    $luas = $panjang * $lebar;

    echo "Panjang = ".$panjang;
    echo "<br>";
    echo "Lebar = ".$lebar;
    echo "<br>";
    echo "Luas = ".$luas;
}

?>