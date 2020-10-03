<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'database-php';

// koneksi ke database
$koneksi = mysqli_connect($localhost, $username, $password, $database);

// cek koneksi
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $telp_wali = $_POST['telp_wali'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $program_akademi = $_POST['program_akademi'];
    $tema_pelatihan = $_POST['tema_pelatihan'];
    $mitra_pelatihan = $_POST['mitra_pelatihan'];

    $result = "INSERT INTO registrasi VALUES ('', '$nama', '$tempat_lahir', '$tgl_lahir', '$nik', '$email', '$telp', '$telp_wali', '$pekerjaan', '$alamat', '$program_akademi', '$tema_pelatihan', '$mitra_pelatihan')";

    $sql = mysqli_query($koneksi, $result);

    if ($sql) {
        echo "<p style='color: green;'>Data berhasil ditambahkan!</p>";
    } else {
        echo "<p style='color: red;'>Data gagal ditambahkan!</p>";
    }
}


$rows = "SELECT * FROM registrasi";
$row = mysqli_query($koneksi, $rows);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <table align="center" width="800">
        <tr>
            <td>
                <table border="1">
                    <tr>
                        <td align="center"><b>FORM KOMITMEN PARTISIPASI <br> PROGRAM PEMBERIAN BANTUAN PEMERINTAH <br> DIGITAL TALENT SCHOLARSHIP TAHUN 2020</b></td>
                    </tr>
                    <tr>
                        <td>
                            <table border="0">
                                <tr>
                                    <td align="justify"><i>Formulir ini untuk diisi (diketik atau tulis tangan dengan jelas) kemudian diunggah/upload di akun digitalent.kominfo.go.id oleh masing-masing peserta di <b>awal</b> pelaksanaan pelatihan</i></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form action="" method="POST">
                                <table border="0">
                                    <tr>
                                        <td colspan="3">
                                            Saya Yang bertandatangan dibawah ini :
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="250">Nama Lengkap (Sesuai KTP)</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama" placeholder="Masukkan nama lengkap" required></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>:</td>
                                        <td><input type="text" name="tempat_lahir" required></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td><input type="date" name="tgl_lahir" required></td>
                                    </tr>
                                    <tr>
                                        <td>NIK/NIP</td>
                                        <td>:</td>
                                        <td><input type="text" name="nik" required></td>
                                    </tr>
                                    <tr>
                                        <td>E-Mail Aktif</td>
                                        <td>:</td>
                                        <td><input type="email" name="email" required></td>
                                    </tr>
                                    <tr>
                                        <td>No. HP Aktif</td>
                                        <td>:</td>
                                        <td><input type="number" name="telp" required></td>
                                    </tr>
                                    <tr>
                                        <td>No HP (Wali/Atasan)</td>
                                        <td>:</td>
                                        <td><input type="number" name="telp_wali" required></td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan</td>
                                        <td>:</td>
                                        <td><input type="text" name="pekerjaan"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Domisili</td>
                                        <td>:</td>
                                        <td><textarea name="alamat" id="" cols="40" rows="4"placeholder="Masukkan alamat lengkap" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Program Akademi</td>
                                        <td>:</td>
                                        <td><input type="text" name="program_akademi" required></td>
                                    </tr>
                                    <tr>
                                        <td>Tema Pelatihan</td>
                                        <td>:</td>
                                        <td><input type="text" name="tema_pelatihan" required></td>
                                    </tr>
                                    <tr>
                                        <td>Mitra Pelatihan</td>
                                        <td>:</td>
                                        <td><input type="text" name="mitra_pelatihan" required></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><button type="submit" name="submit">Kirim</button> | <button type="button">Batal</button></td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table border="1" align="center" width="100%" cellspacing="0" cellpadding="3">
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Tempat Lahir</td>
                                    <td>Tgl. Lahir</td>
                                    <td>No. HP</td>
                                    <td>Email</td>
                                    <td>Aksi</td>
                                </tr>
                                <?php $no = 1; ?>
                                <?php foreach ($row as $key) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $key['nama']; ?></td>
                                        <td><?= $key['tempat_lahir']; ?></td>
                                        <td><?= $key['tgl_lahir']; ?></td>
                                        <td><?= $key['telp']; ?></td>
                                        <td><?= $key['email']; ?></td>
                                        <td><button>Edit</button> <button>Hapus</button></td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>

                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>