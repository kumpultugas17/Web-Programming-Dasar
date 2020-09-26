<!-- <?php 
$nama = "Ahmad";
$gp = 2500000;
$anak = 3;

if ($anak = 4) {
	$tj = $anak * 200000;
}

$gaji = $tj + $gp;

echo "Nama :".$nama;
echo "<br>Gaji Pokok : Rp. ".$gp;
echo "<br>Tunjangan Anak : Rp. ".$tj;
echo "<br>Total Gaji : Rp. ".$gaji;
?> -->

<?php 

$nama = "Ahmad";
$gp = 5000000;
$anak = 1;
$tunjangan = 200000;

if ($anak > 3) {
	// True
	$tunj_a = $tunjangan * 3;
} else {
	//False
	$tunj_a = $tunjangan * $anak;
}

$total = $gp + $tunj_a;

echo "Nama : Ahmad";
echo "<br>Gaji Pokok : ".$gp;
echo "<br>Tunjangan Anak : ".$tunjangan;
echo "<br>Gaji Bersih : ".$total;

 ?>