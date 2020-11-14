<?php include 'koneksi.php';

$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$nama = $nama_depan.' '.$nama_belakang;

// merubah nama file
$fotobaru = date('His').$foto;
// lokasi penyimpanan foto
$path = "images/".$fotobaru;

if (move_uploaded_file($tmp, $path)) {
    $sql = $koneksi->query("INSERT INTO biodata VALUES ('', '$nama', '$tgl_lahir', '$agama', '$jenis_kelamin', '$alamat', '$telepon', '$email', '$fotobaru')");
    header('Location:index.php');
}


