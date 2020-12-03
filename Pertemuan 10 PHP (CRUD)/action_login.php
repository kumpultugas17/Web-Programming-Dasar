<?php
include 'koneksi.php';

$usr = $_POST['username'];
$pwd = md5($_POST['password']);

$sql = $koneksi->query("SELECT * FROM login WHERE username = '
   $usr' AND password = '$pwd'");

$cek = mysqli_num_rows($sql);

if ($cek = 0) {
   echo "Data tidak ditemukan";
} else {
   session_start();
   $_SESSION['user'] = $usr;
   $_SESSION['password'] = $pwd;
   header('Location:dashboard.php');
}