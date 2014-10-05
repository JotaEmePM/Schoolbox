<?php
    $user = '';
    $subtitle = '';
    if(isset($_GET['user'])){
        $user = $_GET['user'];
        if($user == 'adm_cnacional'){
            $subtitle = 'Colegio Nacional | ';
            $folder = 'c1';
        }
        if($user == 'adm_cabello'){
            $subtitle = 'Colegio Andrés Bello | ';
            $folder = 'c2';
        }
    }

    if(isset($_GET['colegio'])){
        $colegio = $_GET['colegio'];
        if($colegio == '1'){
            $subtitle = 'Colegio Nacional | ';
            $folder = 'c1';
        }
        if($colegio == '2'){
            $subtitle = 'Colegio Andrés Bello | ';
            $folder = 'c2';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php echo '<title>'. $subtitle . 'Schoolbox</title>'; ?>

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
                                    <img alt="image" src="image/<?php echo $folder ?>/logo.png" style="max-width: 60px; max-height: 60px;" />
                                </span>
                                <a href="#">
                                    <span class="clear">
                                        <span class="block m-t-xs"> <strong class="font-bold" style="color: #fff; font-size: 14pt;"> <?php echo str_replace('|', '', $subtitle);?> </strong></span>
                                        <span class="text-muted text-xs block" style="color: #fff; font-size: 12pt;"></span>
                                    </span>
                                </a>
                            </div>
                            <div class="logo-element">
                            SB
                            </div>
                        </li>
                        <li class="active">
                            <?php if($user != ''){?>
                                <a href="index.php"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                            <?php } else { ?>
                                <a href="index.php?user=<?php echo $user; ?>"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>                            
                            <?php }?>
                        </li>
                        <li class="">                            
                            <?php if($user != ''){?>
                                <a href="news.php"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Noticias</span> </a>
                            <?php } else { ?>                            
                                <a href="news.php?user=<?php echo $user; ?>"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Noticias</span> </a>
                            <?php }?>
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
                        <?php
                            
                            if($user == 'adm_cnacional'){
                        ?>

                        <li>
                            <a href="#"><i class="fa fa-cog"></i> <span class="nav-label">Administración </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="#"><i class="fa fa-newspaper-o"></i> Noticias</a></li>
                                <li><a href="#"><i class="fa fa-users"></i> Cursos</a></li>
                                <li><a href="#"><i class="fa fa-cogs"></i> Parametros</a></li>
                            </ul>
                        </li>
                        <?php
                            }                            
                        ?>
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

                <!-- CONTENIDO DEL SITIO -->
                <!-- Contenido de index -->
                <div class="row" style="max-height: 600px;">
                    <div class="col-lg-6">
                        <div class="jumbotron">

                            <h1><?php echo str_replace('|', '', $subtitle);?> </h1>
                            <h3 class="text-justify">Nuestro colegio con 30 años al servicio de la educación y el aprendizaje, en su educativo, avanzan con un alto desarrollo intelectual, formal y espiritual, donde el alumno se integra a la sociedad como un ser íntegro capacitado para ser un líder positivo, con amor y respeto a sí mismo y a los demás, comenzando en la educación Pre Básica hasta el término de su Educación Media Científica Humanista entregando jóvenes de sólida formación, cimiento fundamental para proseguir su educación superior con el objetivo de ser grandes personas, capaces de vivir su vocación y participar en la sociedad con principios éticos, valóricos, religiosos y con amplio sentido en cuanto al concepto y sentido de Educación.</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <br />
                        <br />
                        <br />
                        <img src="image/presentacion.jpg" alt="Colegio Andrés Bello" style="max-width: 100%;    ">
                    </div>
                </div>
                <!-- Contenido de index -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Nuestra misión</h5>
                            </div>
                            <div class="ibox-content">
                                <p class="text-justify">Entregar una educación de calidad; siendo éste un lugar de aprendizaje, que pone el saber al alcance de todos, brindando las herramientas necesarias para que nuestros alumnos sean directores de su propio aprendizaje, y una formación integral que los capacite adecuadamente para enfrentar los desafíos que plantea la sociedad moderna. Crear un clima apropiado para que los alumnos creen un espacio donde niños y jóvenes aprendan a vivir en comunidad, alcanzando un desarrollo emocional equilibrado y mentalmente sano, fomentando actitudes positivas de convivencia y comportamientos con principios éticos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Nuestros valores</h5>
                            </div>
                            <div class="ibox-content">
                                <ul>
                                    <li><p>Responsabilidad: Asumir las actividades y deberes en los que se compromete.</p></li>
                                    <li><p>Respeto: Mantener una actitud cordial con todos los integrantes de la unidad educativa.</p></li>
                                    <li><p>Tolerancia: Respeto y consideración hacia las diferentes formas de pensar, actuar y sentir de los demás, entendiendo la diversidad de manifestaciones espirituales ideales y sociales.</p></li>
                                    <li><p>Solidaridad: Voluntad para cooperar y colaborar, tanto en los planos afectivos como institucionales (Cantos, eventos, campañas estudios otros).</p></li>
                                    <li><p>Honestidad: Actuar con rectitud y sinceridad tomando conciencia de la autenticidad y enfatizándose en el deseo de hacer el bien.</p></li>
                                    <li><p>Fraternidad: Aprender a compartir con los iguales en la búsqueda de un bien común.</p></li>
                                    <li><p>Autonomía: Tener la capacidad de autocontrol de sus emociones sin dejarse influenciar ni mediatizar por ningún tipo de condicionante.</p></li>
                                </ul>
                            </div>
                        </div>
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
