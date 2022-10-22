<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
    if (isset($_POST['submit'])) {
        $class = $_POST['class'];
        $subject = $_POST['subject'];
        $status = 1;
        $sql = "INSERT INTO  tblsubjectcombination(ClassId,SubjectId,status) VALUES(:class,:subject,:status)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':class', $class, PDO::PARAM_STR);
        $query->bindParam(':subject', $subject, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "Combinación agregada correctamente.";
        } else {
            $error = "Something went wrong. Please try again";
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
                            <h2 class="title">Agregar Combinación de Materia</h2>

                        </div>

                        <!-- /.col-md-6 text-right -->
                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
                                <li> Materias</li>
                                <li class="active">Agregar Combinación de Materia</li>
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
                                            <h5>Agregar Combinación de Materia</h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <?php if ($msg) { ?>
                                            <div class="alert alert-success left-icon-alert" role="alert">
                                                <strong>Bien hecho!</strong><?php echo htmlentities($msg); ?>
                                            </div><?php } else if ($error) { ?>
                                            <div class="alert alert-danger left-icon-alert" role="alert">
                                                <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                            </div>
                                        <?php } ?>
                                        <form class="" method="post">
                                            <div class="form-group">
                                                <label for="default" class="control-label">Año</label>
                                                <select name="class" class="form-control" id="default" required="required">
                                                    <option value="">Selecciona año</option>
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
                                            <div class="form-group">
                                                <label for="default" class="control-label">Materia</label>
                                                <select name="subject" class="form-control" id="default" required="required">
                                                    <option value="">Selecciona Materia</option>
                                                    <?php $sql = "SELECT * from tblsubjects";
                                                    $query = $dbh->prepare($sql);
                                                    $query->execute();
                                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                    if ($query->rowCount() > 0) {
                                                        foreach ($results as $result) {   ?>
                                                            <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->SubjectName); ?></option>
                                                    <?php }
                                                    } ?>
                                                </select>
                                            </div>



                                            <div class="form-group">
                                                <button type="submit" name="submit" class="btn btn-success">Agregar</button>
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