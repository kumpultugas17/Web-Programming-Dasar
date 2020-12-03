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
            <div class="card" style="margin: 75px 350px 0px 350px;">
               <div class="card-content">
                  <h4 class="center">LOGIN</h4><br>
                  <form action="action_login.php" method="POST">
                     <div class="row">
                        <div class="input-field col s12">
                           <input placeholder="Masukkan Username" id="usr" type="text" name="username">
                           <label for="usr">Username</label>
                        </div>
                        <div class="input-field col s12">
                           <input placeholder="Masukkan Password" id="pw" type="password" name="password">
                           <label for="pw">Password</label>
                        </div>
                        <div class="input-field col s12">
                           <button class="btn-small blue accent-3" type="submit">Login</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html>