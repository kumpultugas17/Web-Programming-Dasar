<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>
<body>
    <form action="" method="get">
        Id <input type="number" name="id"><br>
        Nama <input type="text" name="nama"><br>
        Umur <input type="text" name="umur"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php 
if (isset($_GET['submit'])) {
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $umur = $_GET['umur'];

    echo "ID Anda : ".$id;
    echo "<br>Nama Anda : ".$nama;
    echo "<br>Umur Anda : ".$umur;
} 
?>