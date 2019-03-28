<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Web plantilla de Wordpress QTZMarketing</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="site-header">
            <nav class="redesSociales">
                <div class="container">
                    <ul>
                        <li><a href="www.facebook.com" target="_blank"><img src="facebook.png"/></a></li>
                        <li><a href="www.instagram.com" target="_blank"><img src="instagram.png"/></a></li>
                        <li><a href="www.twitter.com" target="_blank"><img src="twitter.png"/></a></li>
                        <li><a href="www.google+.com" target="_blank"><img src="google.png"/></a></li>
                    </ul>
                </div>
            </nav>
            <nav>
                <div class="navbar-header colorPrincipal ">
                    <div class="logo">
                        <!--Las rutas hacia las imagenes y demás las pondremos con directorios dinámicos,
                        para que no de problema el tener otro tipo de estructura de carpetas-->
                        <a href="<?php echo get_home_url()?>" ><img src="<?php echo get_stylesheet_directory_uri()?>/img/logo.png"/></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-reader">Menú hamburguesa</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse js-navbar-collapse">
                    <?php 
                    //funcion que recibe un array como parametro y que le marca 
                    //la localizacion, las clases y el id del contenedor o menu 
                    wp_nav_menu(array(
                       'theme_location' => 'menu_principal',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbar',
                        'menu_class' => 'nav navbar-nav navbar-right'
                    ));
                    ?>
                </div>
            </nav>
        </header>
    </body>
</html>
