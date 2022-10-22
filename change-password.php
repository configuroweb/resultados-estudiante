<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
    if (isset($_POST['submit'])) {
        $password = md5($_POST['password']);
        $newpassword = md5($_POST['newpassword']);
        $username = $_SESSION['alogin'];
        $sql = "SELECT Password FROM admin WHERE UserName=:username and Password=:password";
        $query = $dbh->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            $con = "update admin set Password=:newpassword where UserName=:username";
            $chngpwd1 = $dbh->prepare($con);
            $chngpwd1->bindParam(':username', $username, PDO::PARAM_STR);
            $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
            $chngpwd1->execute();
            $msg = "Tu contraseña a cambiado correctamente";
        } else {
            $error = "Tu contraseña actual no es la que ingresaste";
        }
    }
?>

    <script type="text/javascript">
        function valid() {
            if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
                alert("La nueva contraseña y su contraseña de confirmación no coinciden");
                document.chngpwd.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>

    <?php include('includes/topbar.php'); ?>
    <div class="content-wrapper">
        <div class="content-container">
            <?php include('includes/leftbar.php'); ?>
            <!-- /.left-sidebar -->

            <div class="main-page">
                <div class="container-fluid">
                    <div class="row page-title-div">
                        <div class="col-md-6">
                            <h2 class="title">Cambiar Contraseña</h2>
                        </div>

                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>

                                <li class="active">Cambiar Contraseña</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

                <section class="section">
                    <div class="container-fluid">





                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Cambiar Contraseña</h5>
                                        </div>
                                    </div>
                                    <?php if ($msg) { ?>
                                        <div class="alert alert-success left-icon-alert" role="alert">
                                            <strong>Bien hecho! </strong><?php echo htmlentities($msg); ?>
                                        </div><?php } else if ($error) { ?>
                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Algo salió mal! </strong> <?php echo htmlentities($error); ?>
                                        </div>
                                    <?php } ?>

                                    <div class="panel-body">

                                        <form name="chngpwd" method="post" \ onSubmit="return valid();">
                                            <div class="form-group has-success">
                                                <label for="success" class="control-label">Contraseña actual</label>
                                                <div class="">
                                                    <input type="password" name="password" class="form-control" required="required" id="success">

                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="success" class="control-label">Nueva Contraseña</label>
                                                <div class="">
                                                    <input type="password" name="newpassword" required="required" class="form-control" id="success">
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="success" class="control-label">Confirmar Contraseña</label>
                                                <div class="">
                                                    <input type="password" name="confirmpassword" class="form-control" required="required" id="success">
                                                </div>
                                            </div>
                                            <div class="form-group has-success">

                                                <div class="">
                                                    <button type="submit" name="submit" class="btn btn-success">Cambiar</button>
                                                </div>



                                        </form>


                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-8 col-md-offset-2 -->
                        </div>
                        <!-- /.row -->




                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.section -->

            </div>
            <!-- /.main-page -->

        </div>
        <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('includes/footer.php'); ?>




<?php  } ?>