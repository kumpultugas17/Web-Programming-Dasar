<?php 
$x = array('M. Iqbal Adenan', '085249099652', 'kumpultugas17@gmail.com');
for ($i=0; $i <= 2; $i++) { 
    echo $x[$i];
    echo "<br>";
}

$y = array('nama' => 'Agus Setiawan', 'wa' => '087896549696', 'email' => 'agus@gmail.com');
echo "<br><br>";
echo "Nama : ".$y['nama'];
echo "<br>WhatApp : ".$y['wa'];
echo "<br>Email : ".$y['email'];
?>