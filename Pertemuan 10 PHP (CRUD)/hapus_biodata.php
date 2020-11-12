<?php 
include 'koneksi.php';
$id = $_GET['id'];

$sql = $koneksi->query("DELETE FROM biodata WHERE id='$id'");

header('Location:index.php');