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

    $menu = 'index';
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

                <!-- CONTENIDO DEL SITIO -->
                <!-- Contenido de index -->
                <div class="row" style="max-height: 600px;">
                    <div class="col-lg-6">
                        <div class="jumbotron" style="background: rgba(204, 204, 204, 0);">

                            <h1><?php echo str_replace('|', '', $subtitle);?> </h1>
                            <?php if($colegio == 1){?>
                                <h3 class="text-justify" style="font-weight:normal; line-height: 22px;">Nuestro colegio con 30 años al servicio de la educación y el aprendizaje, en su educativo, avanzan con un alto desarrollo intelectual, formal y espiritual, donde el alumno se integra a la sociedad como un ser íntegro capacitado para ser un líder positivo, con amor y respeto a sí mismo y a los demás, comenzando en la educación Pre Básica hasta el término de su Educación Media Científica Humanista entregando jóvenes de sólida formación, cimiento fundamental para proseguir su educación superior con el objetivo de ser grandes personas, capaces de vivir su vocación y participar en la sociedad con principios éticos, valóricos, religiosos y con amplio sentido en cuanto al concepto y sentido de Educación.</h3>
                            <?php }else{ ?>
                                <h3 class="text-justify" style="font-weight:normal; line-height: 22px;">El Colegio Particular N°95 Andrés Bello, es una institución de educación humanista científica que funda su línea de acción a partir del compromiso social y la conciencia ambiental. Dentro de este contexto, esta unidad educativa, articula desde la familia, la promoción de competencias que habiliten al alumno para una inserción real y efectiva dentro de la sociedad productiva y paralelamente con una mirada ecológica sistémica y sostenible del desarrollo, teniendo como objetivo final el ingreso a la educación superior.</h3>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <br />
                        <br />
                        <br />
                        <img src="image/<?php echo $colegio ?>/presentacion.jpg" alt="Colegio Andrés Bello" style="max-width: 100%;    ">
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
                                <p class="text-justify" style="font-size:15px">Entregar una educación de calidad; siendo éste un lugar de aprendizaje, que pone el saber al alcance de todos, brindando las herramientas necesarias para que nuestros alumnos sean directores de su propio aprendizaje, y una formación integral que los capacite adecuadamente para enfrentar los desafíos que plantea la sociedad moderna. Crear un clima apropiado para que los alumnos creen un espacio donde niños y jóvenes aprendan a vivir en comunidad, alcanzando un desarrollo emocional equilibrado y mentalmente sano, fomentando actitudes positivas de convivencia y comportamientos con principios éticos.</p>
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
                            <div class="ibox-content" style="font-size:15px">
                                <?php if($colegio == 1){?>
                                    <ul>
                                        <li><p>Responsabilidad: Asumir las actividades y deberes en los que se compromete.</p></li>
                                        <li><p>Respeto: Mantener una actitud cordial con todos los integrantes de la unidad educativa.</p></li>
                                        <li><p>Tolerancia: Respeto y consideración hacia las diferentes formas de pensar, actuar y sentir de los demás, entendiendo la diversidad de manifestaciones espirituales ideales y sociales.</p></li>
                                        <li><p>Solidaridad: Voluntad para cooperar y colaborar, tanto en los planos afectivos como institucionales (Cantos, eventos, campañas estudios otros).</p></li>
                                        <li><p>Honestidad: Actuar con rectitud y sinceridad tomando conciencia de la autenticidad y enfatizándose en el deseo de hacer el bien.</p></li>
                                        <li><p>Fraternidad: Aprender a compartir con los iguales en la búsqueda de un bien común.</p></li>
                                        <li><p>Autonomía: Tener la capacidad de autocontrol de sus emociones sin dejarse influenciar ni mediatizar por ningún tipo de condicionante.</p></li>
                                    </ul>
                                <?php }elseif($colegio == 2){?>
                                    <ul>
                                        <li><p>2.Responsabilidad: Asumir las actividades y deberes en los que se compromete.</p></li>
                                        <li><p>Respeto: Mantener una actitud cordial con todos los integrantes de la unidad educativa.</p></li>
                                        <li><p>Tolerancia: Respeto y consideración hacia las diferentes formas de pensar, actuar y sentir de los demás, entendiendo la diversidad de manifestaciones espirituales ideales y sociales.</p></li>
                                        <li><p>Solidaridad: Voluntad para cooperar y colaborar, tanto en los planos afectivos como institucionales (Cantos, eventos, campañas estudios otros).</p></li>
                                        <li><p>Honestidad: Actuar con rectitud y sinceridad tomando conciencia de la autenticidad y enfatizándose en el deseo de hacer el bien.</p></li>
                                        <li><p>Fraternidad: Aprender a compartir con los iguales en la búsqueda de un bien común.</p></li>
                                        <li><p>Autonomía: Tener la capacidad de autocontrol de sus emociones sin dejarse influenciar ni mediatizar por ningún tipo de condicionante.</p></li>
                                    </ul>
                                <?php }?>
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
