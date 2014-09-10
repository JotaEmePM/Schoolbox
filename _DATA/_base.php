<?php
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Schoolbox</title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            .nav-header{           
                background: url("/School.jpg") repeat scroll 0 0;
                background-size: 220px 180px;
            }  
            .profile-element {
                text-align: center;
                position: relative;
            }
            .back-black {
                width: 100%;
                height: 180px;
                position: absolute;
                left: 0px;
                top: 0px;
            }
            .degradado-black {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #000), color-stop(1, #101010));
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.38));
                background-image: -moz-linear-gradient(center top , rgba(0, 0, 0, 0.06), rgba(16, 16, 16, 0.49));
                background-image: -o-linear-gradient(top, #000, #101010);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#000', EndColorStr='#101010');
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="nav-header" style="position: relative">
                            <div class="back-black degradado-black"></div>
                            <div class="profile-element">
                                <span style="">
                                    <img alt="image" src="image/logo.png" style="max-width: 60px; max-height: 60px;" />
                                </span>
                                <a href="#">
                                    <span class="clear">
                                        <span class="block m-t-xs"> <strong class="font-bold" style="color: #fff; font-size: 14pt;">Colegio Nacional</strong></span>
                                        <span class="text-muted text-xs block" style="color: #fff; font-size: 12pt;">Desde 1936</span>
                                    </span>
                                </a>
                            </div>
                        </li>
                        <li class="active">
                            <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span></a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fa fa-phone"></i> <span class="nav-label">Quienes somos</span> </a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Noticias</span> </a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fa fa-group"></i> <span class="nav-label">Equipo</span> </a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fa fa-rss"></i> <span class="nav-label">Circulares</span> </a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fa fa-map-marker"></i> <span class="nav-label">Ubicación</span> </a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fa fa-calendar"></i> <span class="nav-label">Calendario</span> </a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fa fa-file-text-o"></i> <span class="nav-label">Material academico</span> </a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fa fa-comments-o"></i> <span class="nav-label">Contacto</span> </a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fa fa-sign-in"></i> <span class="nav-label">Admisión</span> </a>
                        </li>
                    </ul>

                </div>
            </nav>

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
                                <a href="login.php"><i class="fa fa-sign-out"></i> Cerrar sesión</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <?php
                    $timezone = date_default_timezone_get();
                    echo "La hora actual del servidor es: " . $timezone;
                ?>
                Pagina base
            </div>
        </div>

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/inspinia.js"></script>
    </body>
</html>
