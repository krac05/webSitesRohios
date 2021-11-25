<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="description" content="Rohios - Desarrollo de Sistemas Amigables" />
    <meta name="keywords" content="Responsive, HTML5, DSAThemes, One Page, Landing, Software, Mobile App, SaaS, Startup, Creative, Freelancers, Digital Product">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rohios - Desarrollo de Sistemas Amigables</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">


    <!-- BOOTSTRAP CSS -->
    <link href="lib/css/bootstrap.min.css?v=<? echo $version; ?>" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="lib/css/flaticon.css?v=<? echo $version; ?>" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="lib/css/menu.css?v=<? echo $version; ?>" rel="stylesheet">

    <!-- CARROUSEL CSS -->
    <link href="lib/css/owl.carousel.min.css?v=<? echo $version; ?>" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="lib/css/animate.css?v=<? echo $version; ?>" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="lib/css/style.css?v=<? echo $version; ?>" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="lib/css/responsive.css?v=<? echo $version; ?>" rel="stylesheet">
</head>

<body>
    <!-- PRELOADER SPINNER ============================================= -->
    <div id="loading" class="green-loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>

    <!-- PAGE CONTENT ============================================= -->
    <div id="page" class="page">

        <!-- HEADER ============================================= -->
        <header id="header" class="header tra-menu navbar-light">
            <div class="header-wrapper">

                <!-- MOBILE HEADER -->
                <div class="wsmobileheader clearfix">
                    <span class="smllogo"><img src="img/icono.png" alt="mobile-logo" /></span>
                    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                </div>

                <!-- NAVIGATION MENU -->
                <div class="wsmainfull menu clearfix">
                    <div class="wsmainwp clearfix">

                        <!-- HEADER LOGO -->
                        <div class="desktoplogo"><a href="?pagina=inicio" class="logo-black"><img src="img/icono.png" alt="header-logo"> <strong class="ms-3 text-black"> Rohios </strong></a> </div>
                        <div class="desktoplogo"><a href="?pagina=inicio" class="logo-white"><img src="img/icono.png" alt="header-logo"> <strong class="ms-3 text-white"> Rohios </strong></a> </div>

                        <!-- MAIN MENU -->
                        <nav class="wsmenu clearfix">
                            <ul class="wsmenu-list nav-green-hover">

                                <!-- MEGAMENU -->
                                <li class="nl-simple" aria-haspopup="true"><a href="?pagina=inicio#hero-3">Inicio</a></li>
                                <li class="nl-simple" aria-haspopup="true"><a href="?pagina=inicio#about-2">Sobre nosotros</a></li>
                                <li class="nl-simple" aria-haspopup="true"><a href="?pagina=inicio#features-4">Servicios</a></li>
                                <li class="nl-simple" aria-haspopup="true"><a href="?pagina=inicio#pricing">Planes</a></li>
                                <li class="nl-simple" aria-haspopup="true"><a href="?pagina=contacto">Contactenos</a></li>
                                <!-- END MEGAMENU -->

                            </ul>
                        </nav> <!-- END MAIN MENU -->
                    </div>
                </div> <!-- END NAVIGATION MENU -->
            </div> <!-- End header-wrapper -->
        </header>
        <!-- END HEADER -->