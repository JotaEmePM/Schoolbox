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
                background:url("/Schoolbox/v1/image/<?php echo $colegio ?>/School.jpg") no-repeat scroll 0 0;
                background-size: 220px 180px;
            }  
            .profile-element {
                text-align: center;
                position: relative;
            }
            .back-black {
                width: 100%;
                height: 158px;
                position: absolute;
                left: 0px;
                top: 0px;
            }
            .degradado-black {
               background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #000), color-stop(1, #101010));
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.88));
                background-image: -moz-linear-gradient(center top , rgba(0, 0, 0, 0.06), rgba(16, 16, 16, 0.49));
                background-image: -o-linear-gradient(top, #000, #101010);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#000', EndColorStr='#101010');
            }
        </style>
    </head>