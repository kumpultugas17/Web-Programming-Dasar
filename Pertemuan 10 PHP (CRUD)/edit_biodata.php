<?php 
include 'koneksi.php';
$id = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM biodata WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col s12 m12">
            <form action="update_biodata.php" method="POST" enctype="multipart/form-data">
               <div class="card">
                  <div class="card-content" style="margin-bottom: 1px;">
                     <div class="row">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <div class="input-field col s12">
                           <input placeholder="Masukkan nama lengkap" id="nama" type="text" class="validate" name="nama" value="<?= $row['nama']; ?>">
                           <label for="nama">Nama Lengkap</label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="input-field col s12">
                           <input placeholder="Masukkan tanggal lahir" id="tgl_lahir" type="date" class="validate" name="tgl_lahir" value="<?= $row['tgl_lahir']; ?>">
                           <label for="tgl_lahir">Tanggal Lahir</label>
                        </div>
                     </div>
                     <div class="row" style="margin-bottom: 45px;">
                        <div class="col s12">
                           <label for="agama">Agama</label>
                           <select class="browser-default" name="agama" id="agama">
                              <option value="" disabled selected>Choose your option</option>
                              <?php $agama = array(
                                 'Islam', 
                                 'Protestan', 
                                 'Khatolik', 
                                 'Hindu', 
                                 'Budha', 
                                 'Konghuchu'
                              ); ?>
                              <?php foreach ($agama as $key) : ?>
                                 <option value="<?= $key; ?>" 
                                    <?= $row['agama'] == $key ? 'selected' : '' ?>>
                                    <?= $key; ?>
                                 </option>
                              <?php endforeach ?>
                           </select>
                        </div>
                     </div>
                     <div class="row" style="margin-bottom: 25px;">
                        <div class="col s12">
                           <label>Jenis Kelamin</label><br>
                           <p>
                              <label for="laki-laki">
                                 <input name="jenis_kelamin" value="L" type="radio" id="laki-laki" <?= $row['jenis_kelamin'] == 'L' ? 'checked' : '' ?>/>
                                 <span>Laki-laki</span>
                              </label>
                           </p>
                           <p>
                              <label for="perempuan">
                                 <input name="jenis_kelamin" value="P" type="radio" id="perempuan" <?= $row['jenis_kelamin'] == 'P' ? 'checked' : '' ?>/>
                                 <span>Perempuan</span>
                              </label>
                           </p>
                        </div>  
                     </div>
                     <div class="row">
                        <div class="input-field col s12">
                           <label for="alamat">Alamat</label>
                           <textarea id="alamat" class="materialize-textarea validate" placeholder="Masukkan alamat lengkap" name="alamat"><?= $row['alamat']; ?></textarea>
                        </div>
                     </div>
                     <div class="row">
                        <div class="input-field col s12">
                           <input placeholder="Masukkan nomor telepon" id="telepon" type="number" class="validate" name="telepon" value="<?= $row['telepon']; ?>">
                           <label for="telepon">Nomor Telepon</label>
                        </div>
                     </div>
                     <div class="row" style="margin-bottom: 1px;">
                        <div class="input-field col s12">
                           <input placeholder="Masukkan E-Mail" id="email" type="email" class="validate" name="email" value="<?= $row['email']; ?>">
                           <label for="email" >E-Mail</label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="input-field col s12">
                           <img src="images/<?= $row['foto']; ?>" alt="" width="100px"><br>
                           <input type="file" name="foto">
                        </div>
                     </div>
                  </div>
                  <div class="card-action">
                     <button class="btn-small blue accent-3" type="submit">Simpan</button> 
                     <button class="btn-small red accent-3" type="button">Batal</button> 
                     <a href="index.php" class="btn-small blue-grey lighten-5 black-text">Kembali</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>      

   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="assets/js/materialize.min.js"></script>
   <script>
      $('#alamat').val('New Text');
      M.textareaAutoResize($('#alamat'));
   </script>
</body>
</html>