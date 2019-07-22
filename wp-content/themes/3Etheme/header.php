<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3E</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>
<body>
<header class="nav-page">
    <div class="container">
        <div class="row">
            <nav class="col-12 navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bar-menu"></span>
                    <span class="bar-menu"></span>
                    <span class="bar-menu"></span>
                </button>                
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <?php
                    $defaults = array(
                        'theme_location'    => 'principal-menu',
                        'container'             => 'false',
                        'menu_class'            => 'navbar-nav'
                    );
                    wp_nav_menu( $defaults );

                    ?>
                </div> 
<!--                 <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link js-btn" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-btn" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-btn" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-btn" href="#proyectos">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-btn" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div> -->
            </nav>
        </div>
    </div>
</header>