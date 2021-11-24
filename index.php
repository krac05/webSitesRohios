<?
$version = rand();
?>

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
                        <div class="desktoplogo"><a href="#hero-3" class="logo-black"><img src="img/icono.png" alt="header-logo"> <strong class="ms-3 text-black"> Rohios </strong></a> </div>
                        <div class="desktoplogo"><a href="#hero-3" class="logo-white"><img src="img/icono.png" alt="header-logo"> <strong class="ms-3 text-white"> Rohios </strong></a> </div>

                        <!-- MAIN MENU -->
                        <nav class="wsmenu clearfix">
                            <ul class="wsmenu-list nav-green-hover">

                                <!-- MEGAMENU -->
                                <li class="nl-simple" aria-haspopup="true"><a href="#inicio">Inicio</a></li>
                                <!-- END MEGAMENU -->

                            </ul>
                        </nav> <!-- END MAIN MENU -->
                    </div>
                </div> <!-- END NAVIGATION MENU -->
            </div> <!-- End header-wrapper -->
        </header>
        <!-- END HEADER -->

        <!-- HERO-3 ============================================= -->
        <section id="hero-3" class="bg-scroll hero-section division">
            <div class="container">
                <div class="row d-flex align-items-center">

                    <!-- HERO TEXT -->
                    <div class="col-lg-6">
                        <div class="hero-3-txt white-color">

                            <!-- Title -->
                            <h2 class="h2-lg wow fadeInUp">Impresionantes soluciones tecnologicas</h2>

                            <!-- Text -->
                            <p class="p-xl wow fadeInUp">
                                Sistema de gestión de centros médicos y control de doctores, pacientes, reservas de citas, etc
                            </p>

                            <!-- Buttons Group -->
                            <div class="btns-group mb-30 wow fadeInUp">
                                <a href="#content-2" class="btn btn-green tra-white-hover mr-15">Empezar</a>
                                <!-- <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video-popup2 btn btn-md btn-transparent ico-20 ico-left">
                                    <span class="flaticon-play"></span> See how it works
                                </a> -->
                            </div>

                            <!-- Advantages List -->
                            <ul class="advantages clearfix wow fadeInUp">
                                <li class="first-li">
                                    <p>Prueba gratuita de 30 días</p>
                                </li>
                                <li>
                                    <p>ESoporte exclusivo</p>
                                </li>
                                <li class="last-li">
                                    <p>Sin cargos</p>
                                </li>
                            </ul>

                        </div>
                    </div> <!-- END HERO TEXT -->


                    <!-- HERO IMAGE -->
                    <div class="col-lg-6">
                        <div class="hero-3-img wow fadeInRight">
                            <img class="img-fluid" src="img/tablet-01.png" alt="hero-image">
                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- End container -->


            <!-- WAVE SHAPE BOTTOM -->
            <div class="wave-shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
                    <path fill="#ffffff" fill-opacity="1" d="M0,192L1440,96L1440,320L0,320Z"></path>
                </svg>
            </div>


        </section> <!-- END HERO-3 -->

        <!-- BRANDS-1 ============================================= -->
        <div id="brands-1" class="wide-100 brands-section division">
            <div class="container">
                <div class="row">
                    <div class="col text-center">


                        <!-- Brands Carousel -->
                        <div class="owl-carousel brands-carousel">

                            <!-- Brand Logo Image -->
                            <div class="brand-logo">
                                <img class="img-fluid" src="img/brand-1.png" alt="brand-logo" />
                            </div>

                            <!-- Brand Logo Image -->
                            <div class="brand-logo">
                                <img class="img-fluid" src="img/brand-2.png" alt="brand-logo" />
                            </div>

                            <!-- Brand Logo Image -->
                            <div class="brand-logo">
                                <img class="img-fluid" src="img/brand-3.png" alt="brand-logo" />
                            </div>

                            <!-- Brand Logo Image -->
                            <div class="brand-logo">
                                <img class="img-fluid" src="img/brand-4.png" alt="brand-logo" />
                            </div>

                            <!-- Brand Logo Image -->
                            <div class="brand-logo">
                                <img class="img-fluid" src="img/brand-5.png" alt="brand-logo">
                            </div>

                            <!-- Brand Logo Image -->
                            <div class="brand-logo">
                                <img class="img-fluid" src="img/brand-6.png" alt="brand-logo" />
                            </div>

                            <!-- Brand Logo Image -->
                            <div class="brand-logo">
                                <img class="img-fluid" src="img/brand-7.png" alt="brand-logo" />
                            </div>

                            <!-- Brand Logo Image -->
                            <div class="brand-logo">
                                <img class="img-fluid" src="img/brand-8.png" alt="brand-logo" />
                            </div>

                            <!-- Brand Logo Image -->
                            <div class="brand-logo">
                                <img class="img-fluid" src="img/brand-9.png" alt="brand-logo" />
                            </div>

                        </div> <!-- End Brands Carousel -->
                    </div> <!-- End row -->
                </div> <!-- End container -->
            </div> <!-- END BRANDS-1 -->
        </div>

        <!-- CONTENT-2 ============================================= -->
        <section id="content-2" class="content-2 pb-60 content-section division">
            <div class="container">
                <div class="row d-flex align-items-center">


                    <!-- IMAGE BLOCK -->
                    <div class="col-md-5 col-lg-6">
                        <div class="rel img-block left-column wow fadeInRight">
                            <img class="img-fluid" src="img/img-15.png" alt="content-image">
                        </div>
                    </div>


                    <!-- TEXT BLOCK -->
                    <div class="col-md-7 col-lg-6">
                        <div class="txt-block right-column wow fadeInLeft">

                            <!-- Section ID -->
                            <span class="section-id txt-upcase">ESTRATEGIA DIGITAL</span>

                            <!-- Title -->
                            <h2 class="h2-xs">Inicie su linea de negocio con Rohios</h2>

                            <!-- Text -->
                            <p class="p-lg">Quaerat sodales sapien euismod blandit purus a purus ipsum primis in cubilia
                                laoreet augue luctus magna dolor luctus and egestas sapien egestas vitae nemo volute
                            </p>

                            <!-- Text -->
                            <p class="p-lg">Quaerat sodales sapien euismod blandit at vitae ipsum primis undo and cubilia
                                laoreet augue and luctus magna dolor luctus at egestas sapien vitae nemo egestas volute and
                                turpis dolores aliquam quaerat sodales a sapien
                            </p>

                        </div>
                    </div> <!-- END TEXT BLOCK -->


                </div> <!-- End row -->
            </div> <!-- End container -->
        </section> <!-- END CONTENT-2 -->

        <!-- FEATURES-8
			============================================= -->
        <section id="features-8" class="pb-60 features-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="section-title title-01 mb-70">

                            <!-- Title -->
                            <h2 class="h2-md">Plataforma Optimizada</h2>

                            <!-- Text -->
                            <p class="p-xl">Accesible desde cualquier dispositivo y en cualquier parte del mundo
                            </p>

                        </div>
                    </div>
                </div>


                <!-- FEATURES-8 WRAPPER -->
                <div class="fbox-8-wrapper text-center">
                    <div class="row row-cols-1 row-cols-md-3">


                        <!-- FEATURE BOX #1 -->
                        <div class="col">
                            <div class="fbox-8 mb-40 wow fadeInUp">

                                <!-- Image -->
                                <div class="fbox-img bg-whitesmoke-gradient">
                                    <img class="img-fluid" src="img/img-24.png" alt="feature-icon" />
                                </div>

                                <!-- Title -->
                                <h5 class="h5-md">Extremadamente flexible</h5>

                                <!-- Text -->
                                <p class="p-lg">
                                    Amigable con el usuario
                                </p>

                            </div>
                        </div>


                        <!-- FEATURE BOX #2 -->
                        <div class="col">
                            <div class="fbox-8 mb-40 wow fadeInUp">

                                <!-- Image -->
                                <div class="fbox-img bg-whitesmoke-gradient">
                                    <img class="img-fluid" src="img/img-22.png" alt="feature-icon" />
                                </div>

                                <!-- Title -->
                                <h5 class="h5-md">Fácil de personalizar</h5>

                                <!-- Text -->
                                <p class="p-lg">Personalización, adaptabilidad a cualquier dispositivo
                                </p>

                            </div>
                        </div>


                        <!-- FEATURE BOX #3 -->
                        <div class="col">
                            <div class="fbox-8 mb-40 wow fadeInUp">

                                <!-- Image -->
                                <div class="fbox-img bg-whitesmoke-gradient">
                                    <img class="img-fluid" src="img/img-23.png" alt="feature-icon" />
                                </div>

                                <!-- Title -->
                                <h5 class="h5-md">Seguridad Concreta</h5>

                                <!-- Text -->
                                <p class="p-lg">Seguridad y disponibilidad 24/7
                                </p>

                            </div>
                        </div>


                    </div> <!-- End row -->
                </div> <!-- END FEATURES-8 WRAPPER -->


            </div> <!-- End container -->
        </section> <!-- END FEATURES-8 -->

        <!-- TESTIMONIALS-1
			============================================= -->
        <section id="reviews-1" class="bg-whitesmoke-gradient wide-100 reviews-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="section-title title-01 mb-70">

                            <!-- Title -->
                            <h2 class="h2-md">Historias de nuestros clientes</h2>

                            <!-- Text -->
                            <p class="p-xl">Conoce algunos testimonios de algunos de nuestros clientes
                            </p>

                        </div>
                    </div>
                </div>


                <!-- TESTIMONIALS CONTENT -->
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel owl-theme reviews-1-wrapper">


                            <!-- TESTIMONIAL #1 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Etiam sapien sagittis congue augue massa varius egestas ultrice
                                        varius magna a tempus aliquet undo cursus suscipit
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="img/review-author-1.jpg" alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Scott Boxer</h6>
                                            <p class="p-md">@scott_boxer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #1 -->


                            <!-- TESTIMONIAL #2 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">At sagittis congue augue and egestas magna ipsum vitae a purus ipsum
                                        primis in cubilia laoreet augue egestas luctus and donec diam ultrice ligula magna
                                        suscipit lectus gestas augue into cubilia
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="img/review-author-2.jpg" alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Joel Peterson</h6>
                                            <p class="p-md">Internet Surfer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #2 -->


                            <!-- TESTIMONIAL #3 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Mauris donec magnis sapien etiam sapien congue augue egestas et ultrice
                                        vitae purus diam integer a congue magna ligula undo egestas magna at suscipit feugiat
                                        primis
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="img/review-author-3.jpg" alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Marisol19</h6>
                                            <p class="p-md">@marisol19</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #3 -->


                            <!-- TESTIMONIAL #4 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Mauris donec a magnis sapien etiam sapien congue augue pretium ligula
                                        lectus aenean a magna undo mauris lectus laoreet tempor egestas
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="img/review-author-4.jpg" alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Leslie D.</h6>
                                            <p class="p-md">Web Developer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #4 -->


                            <!-- TESTIMONIAL #5 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">An augue cubilia laoreet magna suscipit egestas and ipsum a lectus purus ipsum
                                        primis and augue ultrice ligula and egestas a suscipit lectus gestas undo auctor tempus
                                        feugiat impedit
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="img/review-author-5.jpg" alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Jennifer Harper</h6>
                                            <p class="p-md">App Developer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #5 -->


                            <!-- TESTIMONIAL #6 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">An augue cubilia laoreet undo magna ipsum semper suscipit egestas magna
                                        ipsum ligula a vitae purus and ipsum primis cubilia magna suscipit
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="img/review-author-6.jpg" alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Jonathan Barnes</h6>
                                            <p class="p-md">jQuery Programmer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #6 -->


                            <!-- TESTIMONIAL #7 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Augue egestas diam tempus volutpat egestas augue in cubilia laoreet magna
                                        suscipit luctus dolor and blandit vitae purus diam tempus an aliquet porta rutrum gestas
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="img/review-author-7.jpg" alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Mike Harris</h6>
                                            <p class="p-md">Graphic Designer</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #7 -->


                            <!-- TESTIMONIAL #8 -->
                            <div class="review-1">

                                <!-- Quote Icon -->
                                <div class="review-1-ico ico-25">
                                    <span class="flaticon-left-quote"></span>
                                </div>

                                <!-- Text -->
                                <div class="review-1-txt">

                                    <!-- Text -->
                                    <p class="p-lg">Augue at vitae purus tempus egestas volutpat augue undo cubilia laoreet
                                        magna suscipit luctus dolor blandit at purus tempus feugiat impedit
                                    </p>

                                    <!-- Testimonial Author -->
                                    <div class="author-data clearfix">

                                        <!-- Testimonial Avatar -->
                                        <div class="review-avatar">
                                            <img src="img/review-author-8.jpg" alt="review-avatar">
                                        </div>

                                        <!-- Testimonial Author -->
                                        <div class="review-author">

                                            <h6 class="h6-xl">Evelyn Martinez</h6>
                                            <p class="p-md">WordPress Consultant</p>

                                            <!-- Rating -->
                                            <div class="review-rating ico-15 yellow-color">
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-1"></span>
                                                <span class="flaticon-star-half-empty"></span>
                                            </div>

                                        </div>

                                    </div> <!-- End Testimonial Author -->

                                </div> <!-- End Text -->

                            </div> <!-- END TESTIMONIAL #8 -->


                        </div>
                    </div>
                </div> <!-- END TESTIMONIALS CONTENT -->


            </div> <!-- End container -->
        </section> <!-- END TESTIMONIALS-1 -->


        <!-- FOOTER-1
			============================================= -->
        <footer id="footer-1" class="footer division">

            <div class="container">

                <div class="bottom-footer">
                    <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


                        <!-- FOOTER COPYRIGHT -->
                        <div class="col">
                            <div class="footer-copyright">
                                <p>&copy; 2021 - 2024 ROHIOS. Todos los derechos reservados</p>
                            </div>
                        </div>


                        <!-- BOTTOM FOOTER LINKS -->
                        <div class="col">
                            <ul class="bottom-footer-list text-secondary text-end">
                                <li class="first-li">
                                    <p><a href="https://www.instagram.com/rohi_os/?hl=es">Instagram</a></p>
                                </li>
                                <!-- <li>
                        <p><a href="#">LinkedIn</a></p>
                    </li>
                    <li class="last-li">
                        <p><a href="#">Dribbble</a></p>
                    </li> -->
                            </ul>
                        </div>


                    </div> <!-- End row -->
                </div> <!-- BOTTOM FOOTER -->


            </div>
        </footer>
    </div>
    <script src="lib/js/jquery-3.6.0.min.js?v=<? echo $version; ?>"></script>
    <script src="lib/js/bootstrap.min.js?v=<? echo $version; ?>"></script>

    <script src="lib/js/menu.js?v=<? echo $version; ?>"></script>
    <script src="lib/js/owl.carousel.min.js?v=<? echo $version; ?>"></script>

    <script src="lib/js/wow.js?v=<? echo $version; ?>"></script>
    <script src="lib/js/custom.js?v=<? echo $version; ?>"></script>
</body>

</html>