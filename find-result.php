<?php
session_start();
//error_reporting(0);
include('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado Estudiante</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/icheck/skins/flat/blue.css">
    <link rel="stylesheet" href="assets/css/main.css" media="screen">
    <script src="assets/js/modernizr/modernizr.min.js"></script>
</head>

<body class="" style="background-image: url(assets/images/back1.jpg);
      background-color: #ffffff;
      background-size: cover;
      height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
    <div class="main-wrapper">

        <div class="login-bg-color">
            <div class="row">
                <div class="col-md-4 col-md-offset-7">
                    <div class="panel login-box" style="    background: #3d86ed;">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <a href="#">
                                    <img style="height: 70px" src="assets/images/footer-logo.png"></a>
                                <h3 class="text-white">Verifica tus Resultados</h3>
                            </div>
                        </div>
                        <div class="panel-body p-20">



                            <form action="result.php" method="post" class="admin-login">
                                <div class="form-group">
                                    <label for="rollid" class="control-label">Ingresa tu ID Roll</label>
                                    <input type="text" class="form-control" id="rollid" placeholder="Ingresa tu ID Roll" autocomplete="off" name="rollid">
                                </div>
                                <div class="form-group">
                                    <label for="default" class="control-label">Año</label>
                                    <select name="class" class="form-control" id="default" required="required">
                                        <option value="">Selecciona tu año</option>
                                        <?php $sql = "SELECT * from tblclasses";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {   ?>
                                                <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName); ?>&nbsp; Section-<?php echo htmlentities($result->Section); ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>


                                <div class="form-group mt-20">
                                    <div class="">

                                        <button type="submit" class="btn" style="color: #172541;">Buscar</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <a href="index.php" class="text-white">Volver</a>
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-md-6 col-md-offset-3 -->
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
    <script src="assets/js/icheck/icheck.min.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="assets/js/main.js"></script>
    <script>
        $(function() {
            $('input.flat-blue-style').iCheck({
                checkboxClass: 'icheckbox_flat-blue'
            });
        });
    </script>

    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>