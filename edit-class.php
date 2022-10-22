<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
    if (isset($_POST['update'])) {
        $classname = $_POST['classname'];
        $classnamenumeric = $_POST['classnamenumeric'];
        $section = $_POST['section'];
        $cid = intval($_GET['classid']);
        $sql = "update  tblclasses set ClassName=:classname,ClassNameNumeric=:classnamenumeric,Section=:section where id=:cid ";
        $query = $dbh->prepare($sql);
        $query->bindParam(':classname', $classname, PDO::PARAM_STR);
        $query->bindParam(':classnamenumeric', $classnamenumeric, PDO::PARAM_STR);
        $query->bindParam(':section', $section, PDO::PARAM_STR);
        $query->bindParam(':cid', $cid, PDO::PARAM_STR);
        $query->execute();
        $msg = "Información de año fue actualizada correctamente";
    }
?>


    <!-- ========== TOP NAVBAR ========== -->
    <?php include('includes/topbar.php'); ?>
    <!-----End Top bar>
        ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
    <div class="content-wrapper">
        <div class="content-container">

            <!-- ========== LEFT SIDEBAR ========== -->
            <?php include('includes/leftbar.php'); ?>
            <!-- /.left-sidebar -->

            <div class="main-page">
                <div class="container-fluid">
                    <div class="row page-title-div">
                        <div class="col-md-6">
                            <h2 class="title">Actualizar Año</h2>
                        </div>

                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
                                <li><a href="#">Años</a></li>
                                <li class="active">Actualizar Año</li>
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
                                            <h5>Actualizar Información de Año</h5>
                                        </div>
                                    </div>
                                    <?php if ($msg) { ?>
                                        <div class="alert alert-success left-icon-alert" role="alert">
                                            <strong>Proceso Exitoso! </strong><?php echo htmlentities($msg); ?>
                                        </div><?php } else if ($error) { ?>
                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Hubo inconvenientes! </strong> <?php echo htmlentities($error); ?>
                                        </div>
                                    <?php } ?>

                                    <form method="post">
                                        <?php
                                        $cid = intval($_GET['classid']);
                                        $sql = "SELECT * from tblclasses where id=:cid";
                                        $query = $dbh->prepare($sql);
                                        $query->bindParam(':cid', $cid, PDO::PARAM_STR);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {   ?>

                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Nombre de Año</label>
                                                    <div class="">
                                                        <input type="text" name="classname" value="<?php echo htmlentities($result->ClassName); ?>" required="required" class="form-control" id="success">
                                                        <span class="help-block">Eg- Third, Fouth,Sixth etc</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Nombre de Año en Número</label>
                                                    <div class="">
                                                        <input type="number" name="classnamenumeric" value="<?php echo htmlentities($result->ClassNameNumeric); ?>" required="required" class="form-control" id="success">
                                                        <span class="help-block">Ejemplo - 1,2,4,5 etc</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Sección</label>
                                                    <div class="">
                                                        <input type="text" name="section" value="<?php echo htmlentities($result->Section); ?>" class="form-control" required="required" id="success">
                                                        <span class="help-block">Ejemplo - A,B,C etc</span>
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>
                                        <div class="form-group has-success">

                                            <div class="">
                                                <button type="submit" name="update" class="btn btn-success btn-labeled">Actualizar<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
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


        <!-- /.right-sidebar -->

    </div>
    <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('includes/footer.php'); ?>




<?php  } ?>