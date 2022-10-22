<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
    if (isset($_POST['submit'])) {
        $subjectname = $_POST['subjectname'];
        $subjectcode = $_POST['subjectcode'];
        $sql = "INSERT INTO  tblsubjects(SubjectName,SubjectCode) VALUES(:subjectname,:subjectcode)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':subjectname', $subjectname, PDO::PARAM_STR);
        $query->bindParam(':subjectcode', $subjectcode, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = " Materia creada correctamente";
        } else {
            $error = "Hubo un fallo, reintenta";
        }
    }
?>


    <!-- ========== TOP NAVBAR ========== -->
    <?php include('includes/topbar.php'); ?>
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
                            <h2 class="title">Crear Materia</h2>

                        </div>

                        <!-- /.col-md-6 text-right -->
                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
                                <li> Materia</li>
                                <li class="active">Crear Materia</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <section class="section">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Crear Materia</h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <?php if ($msg) { ?>
                                            <div class="alert alert-success left-icon-alert" role="alert">
                                                <strong>Bien hecho</strong><?php echo htmlentities($msg); ?>
                                            </div><?php } else if ($error) { ?>
                                            <div class="alert alert-danger left-icon-alert" role="alert">
                                                <strong>Hubo inconvenientes!</strong> <?php echo htmlentities($error); ?>
                                            </div>
                                        <?php } ?>
                                        <form class="" method="post">
                                            <div class="form-group">
                                                <label for="default" class="control-label">Nombre Materia</label>
                                                <input type="text" name="subjectname" class="form-control" id="default" placeholder="Nombre Materia" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label for="default" class="control-label">Código Materia</label>
                                                <input type="text" name="subjectcode" class="form-control" id="default" placeholder="Código Materia" required="required">
                                            </div>



                                            <div class="form-group">

                                                <button type="submit" name="submit" class="btn btn-success">Enviar</button>

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.content-container -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <?php include('includes/footer.php'); ?>



<?PHP } ?>