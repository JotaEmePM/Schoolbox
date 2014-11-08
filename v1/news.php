<?php
    $user = '';
    $subtitle = '';
    // var_dump($_GET);die();
    if(isset($_GET['user'])){
        // die('a');
        $user = $_GET['user'];
        if($user == 'adm_cnacional'){
            $subtitle = 'Colegio Nacional | ';
            $colegio = 'c1';
        }
        if($user == 'adm_cabello'){
            $subtitle = 'Colegio Andrés Bello | ';
            $colegio = 'c2';
        }
    }

    if(isset($_GET['colegio'])){
        $colegio = $_GET['colegio'];
        if($colegio == '1'){
            $subtitle = 'Colegio Nacional | ';
        }
        if($colegio == '2'){
            $subtitle = 'Colegio Andrés Bello | ';
        }
    }

    $menu = 'news';
?>
<!DOCTYPE html>
<html lang="en">
    
    <?php include('include/header.php');?>

    <body>
        <div id="wrapper">

            <?php include('include/menu.php');?>

            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">Bienvenido a Schoolbox.</span>
                            </li>
                            <li>
                                <?php
                                    if($user != ''){
                                ?>
                                <a href="login.php"><i class="fa fa-sign-out"></i> Cerrar sesión</a>
                                <?php
                                    } else {
                                ?>
                                <a href="login.php"><i class="fa fa-sign-out"></i> Conectar</a>
                                <?php
                                    }
                                ?>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- HEADER -->
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Noticias</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Inicio</a>
                            </li>
                            <li class="active">
                                <strong>Noticias</strong>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- HEADER -->
                <!-- CONTENIDO DEL SITIO -->
                <div class="wrapper wrapper-content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Noticia 1</h5>                                    
                                </div>
                                <div class="ibox-content">
                                    hola
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Noticia 2</h5>                                    
                                </div>
                                <div class="ibox-content">
                                    hola
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Noticia 3</h5>                                    
                                </div>
                                <div class="ibox-content">
                                    hola
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Noticia 4</h5>                                    
                                </div>
                                <div class="ibox-content">
                                    hola
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Noticia 5</h5>                                    
                                </div>
                                <div class="ibox-content">
                                    hola
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Noticia 6</h5>                                    
                                </div>
                                <div class="ibox-content">
                                    hola
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Noticia 7</h5>                                    
                                </div>
                                <div class="ibox-content">
                                    hola
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <a class="btn btn-primary" href="#">Ver más...</a>
                        </div>                    
                    </div>
                    <!-- CONTENIDO DEL SITIO -->
                </div>
            </div>

            <script src="js/jquery-1.10.2.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/pace.min.js"></script>
            <script src="js/jquery.metisMenu.js"></script>
            <script src="js/inspinia.js"></script>
    </body>
</html>
