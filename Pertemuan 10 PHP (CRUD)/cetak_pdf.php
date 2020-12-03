<?php 
session_start();
if (!isset($_SESSION["password"])) {
  header("Location:login.php");
  exit;
}

include 'koneksi.php';
$sql = $koneksi->query("SELECT * FROM biodata");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="window.print();">
    <table border="1" style="padding: 0px; margin: 3px;">
        <thead>
            <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Tanggal Lahir</th>
              <th>Agama</th>
              <th>Jenis Kelamin</th>
              <th>Nomor Telepon</th>
              <th>E-Mail</th>
          </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        <?php foreach ($sql as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tgl_lahir']; ?></td>
                <td><?= $row['agama']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['telepon']; ?></td>
                <td><?= $row['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>