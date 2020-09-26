<?php 
if (isset($_POST['hitung'])) {

    $nama = $_POST['nama'];
    $jamker = 150;
    $kerja = $_POST['jl'];
    $jamlembur = $kerja - $jamker;
    $gol = $_POST['gol'];

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

}
?>