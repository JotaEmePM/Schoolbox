<!--menu-->
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="nav-header" style="position: relative">
                            <div class="back-black degradado-black"></div>
                            <div class="profile-element">
                                <span style="">
                                    <img alt="image" src="image/<?php echo $colegio ?>/logo.png" style="max-width: 60px; max-height: 60px;" />
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
                        <li <?php echo ($menu == 'index') ? 'class="active"':''; ?> >
                            <?php if($user == ''){?>
                                <a href="index.php?colegio=1"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                            <?php } else { ?>
                                <a href="index.php?user=<?php echo $user; ?>"><i class="fa fa-home"></i> <span class="nav-label">Inicio2</span></a>                            
                            <?php }?>
                        </li>
                        <li <?php echo ($menu == 'news') ? 'class="active"':''; ?> >                            
                            <?php if($user == ''){?>
                                <a href="news.php?colegio=1"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Noticias</span> </a>
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
            <!--end menu-->