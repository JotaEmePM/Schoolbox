<?php
    $error = 0;
    if(!empty($_POST)){
        $postNameArr = array('usuario', 'password');
        $postIdentifierArr = array();
    
        foreach ($postNameArr as $postName)
        {
            if (array_key_exists($postName, $_POST))
            {
                $postIdentifierArr[] = $postName;
            }
        }
    }
?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Schoolbox | Login</title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="gray-bg">
        <?php
            if (count($postIdentifierArr) == 2)
            {
                if($_POST['usuario'] == 'adm_cnacional' && $_POST['password'] == '123456'){
                    header( 'Location: index.php?user=adm_cnacional' ) ;
                } else {
                    $error = 1;   
                }
            }
        ?>
        <div class="middle-box text-center loginscreen  animated fadeInDown">
            <div>
                <div>
                    <h1 class="logo-name">SB</h1>
                </div>
                <h3>Bienvenido a Schoolbox</h3>
                <p>Administración de contenidos escolares</p>
                <p>Inicia sesión</p>
                <?php
                    if($error != 0){
                        if($error == 1){
                            echo '<div class="widget red-bg p-lg text-center"><div class="m-b-md"><i class="fa fa-exclamation fa-4x"></i><h3 class="font-bold no-margins">Error</h3><small>Nombre de usuario y/o contraseña incorrecto.</small></div></div>';
                        }
                    }
                ?>
                <form class="m-t" role="form" action="login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Conectar</button>

                    <a href="#"><small>¿Olvidaste contraseña?</small></a>

                </form>
                <p class="m-t"> <small>Schoolbox &copy; 2014</small> </p>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
