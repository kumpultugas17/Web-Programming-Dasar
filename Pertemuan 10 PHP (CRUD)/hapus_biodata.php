<?php 
session_start();
if (!isset($_SESSION["password"])) {
  header("Location:login.php");
  exit;
}

include 'koneksi.php';
$id = $_GET['id'];

$sql = $koneksi->query("DELETE FROM biodata WHERE id='$id'");

header('Location:biodata.php');