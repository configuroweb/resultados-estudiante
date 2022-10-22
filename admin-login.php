<?php
session_start();
error_reporting(0);
include('includes/config.php');
if ($_SESSION['alogin'] != '') {
   $_SESSION['alogin'] = '';
}
if (isset($_POST['login'])) {
   $uname = $_POST['username'];
   $password = md5($_POST['password']);
   $sql = "SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
   $query = $dbh->prepare($sql);
   $query->bindParam(':uname', $uname, PDO::PARAM_STR);
   $query->bindParam(':password', $password, PDO::PARAM_STR);
   $query->execute();
   $results = $query->fetchAll(PDO::FETCH_OBJ);
   if ($query->rowCount() > 0) {
      $_SESSION['alogin'] = $_POST['username'];
      echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
   } else {

      echo "<script>alert('Invalid Details');</script>";
   }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Acceso Admin</title>
   <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">
   <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen">
   <link rel="stylesheet" href="assets/css/animate-css/animate.min.css" media="screen">
   <link rel="stylesheet" href="assets/css/prism/prism.css" media="screen">
   <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
   <link rel="stylesheet" href="assets/css/main.css" media="screen">
   <script src="assets/js/modernizr/modernizr.min.js"></script>
</head>

<body class="" style="background-image: url(assets/images/back2.jpg);
      background-color: #3d85ed;
      background-size: cover;
      height: 100%;
 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
   <div class="main-wrapper">
      <div class="">
         <div class="row">
            <div class="col-md-offset-7 col-lg-5">
               <section class="section">
                  <div class="row mt-40">
                     <div class="col-md-offset-2 col-md-10  pt-50">
                        <div class="row mt-30 ">
                           <div class="col-md-11">
                              <div class="panel login-box" style="    background: #3d86ed;">
                                 <div class="panel-heading">

                                    <div class="text-center"><br>
                                       <a href="#">
                                          <img style="height: 70px" src="assets/images/footer-logo.png"></a>
                                       <br>
                                       <h5 style="color: white;"> <strong>Acceso Administrativo</strong></h5>
                                    </div>
                                 </div>
                                 <div class="panel-body p-20">
                                    <form class="admin-login" method="post">
                                       <div class="form-group">
                                          <label for="inputEmail3" class="control-label">Correo</label>
                                          <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Correo">
                                       </div>
                                       <div class="form-group">
                                          <label for="inputPassword3" class="control-label">Contraseña</label>
                                          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
                                       </div><br>
                                       <div class="form-group mt-20">
                                          <button type="submit" name="login" class="btn login-btn">Acceder</button>

                                       </div>
                                       <br>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <!-- /.col-md-11 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /.col-md-12 -->
                  </div>
                  <!-- /.row -->
               </section>
            </div>
            <!-- /.col-md-6 -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /. -->
   </div>
   <!-- /.main-wrapper -->
   <!-- ========== COMMON JS FILES ========== -->
   <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
   <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/js/bootstrap/bootstrap.min.js"></script>
   <script src="assets/js/pace/pace.min.js"></script>
   <script src="assets/js/lobipanel/lobipanel.min.js"></script>
   <script src="assets/js/iscroll/iscroll.js"></script>
   <!-- ========== PAGE JS FILES ========== -->
   <!-- ========== THEME JS ========== -->
   <script src="assets/js/main.js"></script>
   <script>
      $(function() {

      });
   </script>


   <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>