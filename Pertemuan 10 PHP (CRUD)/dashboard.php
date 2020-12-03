<?php
session_start();
if (!isset($_SESSION["password"])) {
  header("Location:login.php");
  exit;
}
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
   <div class="container-fluid">
      <div class="row">
         <div class="col s12 m12">
            <nav>
               <div class="nav-wrapper">
                  <a href="#" class="brand-logo">MyWebsite</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                     <li><a href="dashboard.php">Halaman User</a></li>
                     <li><a href="biodata.php">Biodata</a></li>
                     <li><a href="tambah_biodata.php">Tambah Biodata</a></li>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </div>
   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html>