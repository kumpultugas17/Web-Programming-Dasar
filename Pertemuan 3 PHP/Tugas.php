<?php 
$nama = "Agus Setiawan";
$jamker = 150;
$kerja = 200;
$jamlembur = $kerja - $jamker;
$gol = "C";

switch ($gol) {
    case 'A':
        $upah = 5000;
        break;
    
    case 'B':
        $upah = 6000;
        break;
    
    case 'C':
        $upah = 7500;
        break;
    
    default:
        $upah = 9000;
        break;
}

if ($kerja > 150) {
    $persen = 0.25 * $upah;
    $upahlembur = $upah + $persen;
    $gajilembur = $jamlembur * $upahlembur;
    $gaji = $jamker * $upah;
    $total = $gaji + $gajilembur;
    $gb = $total * 4;
} else {
    $gaji = $jamker * $upah;
    $gb = $gaji * 4;
    $total = 0;
}

echo "Nama : ".$nama;
echo "<br>Golongan : ".$gol;
echo "<br>Jam Lembur : ".$jamlembur;
echo "<br>Uang Lembur : ".$total;
echo "<br>Gaji Bersih : ".$gb;
?>