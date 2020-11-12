<?php 
function profil() {
    echo 'M IQBAL ADENAN';
    echo '<br>Manajemen Informatika & Komputer';
    echo '<br>085249099652';
    echo '<br>m.iqbal.adenan@gmail.com';
    echo '<hr>';
}
profil();

function identitas($nama) {
    echo 'Nama saya adalah : '.$nama.'<br>';
    return $nama;
}
identitas('M. Iqbal Adenan');
identitas('Agus Setiawan');

function usia($thn_lahir, $thn_skg) {
    $umur = $thn_skg - $thn_lahir;
    echo "Umur saya : ".$umur;
    return $umur;
}
usia(1992, 2020);
usia(2002, 2020);

function hitung($panjang, $lebar) {
    $luas = $panjang * $lebar;
    echo $panjang. " x " .$lebar. " = " .$luas;
    echo "<br>";
    return $luas;
}

hitung(5, 10);
hitung(6, 12);
hitung(9, 28)

?>