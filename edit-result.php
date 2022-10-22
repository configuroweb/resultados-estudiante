<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {

    $stid = intval($_GET['stid']);
    if (isset($_POST['submit'])) {

        $rowid = $_POST['id'];
        $marks = $_POST['marks'];

        foreach ($_POST['id'] as $count => $id) {
            $mrks = $marks[$count];
            $iid = $rowid[$count];
            for ($i = 0; $i <= $count; $i++) {

                $sql = "update tblresult  set marks=:mrks where id=:iid ";
                $query = $dbh->prepare($sql);
                $query->bindParam(':mrks', $mrks, PDO::PARAM_STR);
                $query->bindParam(':iid', $iid, PDO::PARAM_STR);
                $query->execute();

                $msg = "Información de resultados actualizada con éxito";
            }
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
                            <h2 class="title">Información del resultado del estudiante</h2>

                        </div>

                        <!-- /.col-md-6 text-right -->
                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>

                                <li class="active">Información de Resultados</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h5>Actualizar Información de Resultados</h5>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <?php if ($msg) { ?>
                                        <div class="alert alert-success left-icon-alert" role="alert">
                                            <strong>Proceso Correcto! </strong><?php echo htmlentities($msg); ?>
                                        </div><?php } else if ($error) { ?>
                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Algo salió mal! </strong> <?php echo htmlentities($error); ?>
                                        </div>
                                    <?php } ?>
                                    <form class="form-horizontal" method="post">

                                        <?php

                                        $ret = "SELECT tblstudents.StudentName,tblclasses.ClassName,tblclasses.Section from tblresult join tblstudents on tblresult.StudentId=tblresult.StudentId join tblsubjects on tblsubjects.id=tblresult.SubjectId join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.StudentId=:stid limit 1";
                                        $stmt = $dbh->prepare($ret);
                                        $stmt->bindParam(':stid', $stid, PDO::PARAM_STR);
                                        $stmt->execute();
                                        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($stmt->rowCount() > 0) {
                                            foreach ($result as $row) {  ?>


                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Año</label>
                                                    <div class="col-sm-10">
                                                        <?php echo htmlentities($row->ClassName) ?>(<?php echo htmlentities($row->Section) ?>)
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Nombre Completo</label>
                                                    <div class="col-sm-10">
                                                        <?php echo htmlentities($row->StudentName); ?>
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>



                                        <?php
                                        $sql = "SELECT distinct tblstudents.StudentName,tblstudents.StudentId,tblclasses.ClassName,tblclasses.Section,tblsubjects.SubjectName,tblresult.marks,tblresult.id as resultid from tblresult join tblstudents on tblstudents.StudentId=tblresult.StudentId join tblsubjects on tblsubjects.id=tblresult.SubjectId join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.StudentId=:stid ";
                                        $query = $dbh->prepare($sql);
                                        $query->bindParam(':stid', $stid, PDO::PARAM_STR);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {  ?>



                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label"><?php echo htmlentities($result->SubjectName) ?></label>
                                                    <div class="col-sm-10">
                                                        <input type="hidden" name="id[]" value="<?php echo htmlentities($result->resultid) ?>">
                                                        <input type="text" name="marks[]" class="form-control" id="marks" value="<?php echo htmlentities($result->marks) ?>" maxlength="5" required="required" autocomplete="off">
                                                    </div>
                                                </div>




                                        <?php }
                                        } ?>


                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" name="submit" class="btn btn-primary">Actualizar</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                </div>
            </div>
            <!-- /.content-container -->
        </div>
        <!-- /.content-wrapper -->
        <?php include('includes/footer.php'); ?>



    <?PHP } ?>