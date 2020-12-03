<?php 
session_start();
if (!isset($_SESSION["password"])) {
  header("Location:login.php");
  exit;
}

include 'koneksi.php';

$uploadOk = 1;
$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$cek_size = $_FILES['foto']['size'];
$target = basename($_FILES["foto"]["name"]);
$imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

// Check file size
if ($cek_size > 1000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}

// merubah nama file
$fotobaru = date('His').$foto;
// lokasi penyimpanan foto
$path = "images/".$fotobaru;
if ($uploadOk == 0) {
    header('location:tambah_biodata.php');
} else {
    if (move_uploaded_file($tmp, $path)) {
        $sql = $koneksi->query("UPDATE biodata SET 
            nama = '$nama',
            tgl_lahir = '$tgl_lahir',
            agama = '$agama',
            jenis_kelamin = '$jenis_kelamin',
            alamat = '$alamat',
            telepon = '$telepon',
            email = '$email',
            foto = '$fotobaru'  
            WHERE id='$id'");
    } else {
        if (!$sql) {
            header('Location:edit_biodata.php');
        }
    }
    header('Location:biodata.php');
}