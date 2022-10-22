<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
    if (isset($_POST['submit'])) {
        $classname = $_POST['classname'];
        $classnamenumeric = $_POST['classnamenumeric'];
        $section = $_POST['section'];
        $sql = "INSERT INTO  tblclasses(ClassName,ClassNameNumeric,Section) VALUES(:classname,:classnamenumeric,:section)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':classname', $classname, PDO::PARAM_STR);
        $query->bindParam(':classnamenumeric', $classnamenumeric, PDO::PARAM_STR);
        $query->bindParam(':section', $section, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "Class Created successfully";
        } else {
            $error = "Something went wrong. Please try again";
        }
    }
?>


    <!-- ========== TOP NAVBAR ========== -->
    <?php include('includes/topbar.php'); ?>
    <!-----End Top bar-->
    <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
    <div class="content-wrapper">
        <div class="content-container">

            <!-- ========== LEFT SIDEBAR ========== -->
            <?php include('includes/leftbar.php'); ?>
            <!-- /.left-sidebar -->

            <div class="main-page">
                <div class="container-fluid">
                    <div class="row page-title-div">
                        <div class="col-md-6">
                            <h2 class="title">Crear Año</h2>
                        </div>

                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
                                <li><a href="#">Año</a></li>
                                <li class="active">Crear Año</li>
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
                                            <h5>Crear Año</h5>
                                        </div>
                                    </div>
                                    <?php if ($msg) { ?>
                                        <div class="alert alert-success left-icon-alert" role="alert">
                                            <strong>Bien Hecho</strong><?php echo htmlentities($msg); ?>
                                        </div><?php } else if ($error) { ?>
                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Hubo un problema</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                    <?php } ?>

                                    <div class="panel-body">

                                        <form method="post">
                                            <div class="form-group has-success">
                                                <label for="success" class="control-label">Nombre Año</label>
                                                <div class="">
                                                    <input type="text" name="classname" class="form-control" required="required" id="success">
                                                    <span class="help-block">Puedes poner Primero, Segundo o algo así</span>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="success" class="control-label">Año en Número</label>
                                                <div class="">
                                                    <input type="number" name="classnamenumeric" required="required" class="form-control" id="success">
                                                    <span class="help-block">Puedes poner 1,2,3 ...</span>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="success" class="control-label">Sección</label>
                                                <div class="">
                                                    <input type="text" name="section" class="form-control" required="required" id="success">
                                                    <span class="help-block">Puedes poner A, B, C ...</span>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">

                                                <div class="">
                                                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
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