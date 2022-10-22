<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ConfiguroWeb | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/toastr/toastr.min.css" media="screen">
    <link rel="stylesheet" href="assets/css/icheck/skins/line/blue.css">
    <link rel="stylesheet" href="assets/css/icheck/skins/line/red.css">
    <link rel="stylesheet" href="assets/css/icheck/skins/line/green.css">
    <link rel="stylesheet" href="assets/css/main.css" media="screen">
    <link rel="stylesheet" href="assets/css/prism/prism.css" media="screen">

    <!-- <link rel="stylesheet" type="text/css" href="assets/js/DataTables/datatables.min.css"/> -->
    <script src="assets/js/modernizr/modernizr.min.js"></script>
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }
    </style>
</head>
<div id="page"></div>
<div id="loading"></div>

<body class="top-navbar-fixed">

    <div class="main-wrapper">
        <nav class="navbar top-navbar bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar-header no-padding">
                        <a class="navbar-brand" target="a_blank" href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript">
                            <img src="assets/images/logo.png" style="Width: 165px">
                        </a>
                        <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                        <button type="button" class="navbar-toggle mobile-nav-toggle">
                            <i class="fa fa-bars"></i>
                        </button>

                    </div>
                    <!-- /.navbar-header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>

                            <li class="hidden-xs hidden-xs">
                                <!-- <a href="#">My Tasks</a> -->
                            </li>
                        </ul>
                        <!-- /.nav navbar-nav -->

                        <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                            <li>
                                <a href="logout.php" class="color-danger text-center"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
                            </li>



                        </ul>
                        <!-- /.nav navbar-nav navbar-right -->
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </nav>