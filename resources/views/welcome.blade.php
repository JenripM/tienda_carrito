<!DOCTYPE html>
<!--
 Salient by TEMPLATE STOCK
 templatestock.co @templatestock
 Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M & R</title>

    <!-- Custom Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,300,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS Style -->
    <link rel="stylesheet" href="{{ asset('salient/assets/css/bootstrap.min.css') }}">

    <!-- Template CSS Style -->
    <link rel="stylesheet" href="{{ asset('salient/assets/css/style.css') }}">

    <!-- Animate CSS  -->
    <link rel="stylesheet" href="{{ asset('salient/assets/css/animate.css') }}">

    <!-- FontAwesome 4.3.0 Icons  -->
    <link rel="stylesheet" href="{{ asset('salient/assets/css/font-awesome.min.css') }}">

    <!-- et line font  -->
    <link rel="stylesheet" href="{{ asset('salient/assets/css/et-line-font/style.css') }}">

    <!-- BXslider CSS  -->
    <link rel="stylesheet" href="{{ asset('salient/assets/css/bxslider/jquery.bxslider.css') }}">

    <!-- Owl Carousel CSS Style -->
    <link rel="stylesheet" href="{{ asset('salient/assets/css/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('salient/assets/css/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('salient/assets/css/owl-carousel/owl.transitions.css') }}">

    <!-- Magnific-Popup CSS Style -->
    <link rel="stylesheet" href="{{ asset('salient/assets/css/magnific-popup/magnific-popup.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

    <!-- Preload the Whole Page -->
    <div id="preloader">
        <div id="loading-animation">&nbsp;</div>
    </div>

    <!-- Navbar -->
    <header class="header">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navigation-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="img-fluid">
                        <a class="navbar-brand" href="{{route('welcome')}}"><img style="width: 250px; margin-top: -10px;"
                                src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navigation-nav">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="section-scroll" href="#wrapper">Inicio</a></li>
                        <li><a href="#landing-offer">Informacion</a></li>
                        <li><a href="#features-section">Servicios</a></li>
                        <li><a href="#team-section">Equipo</a></li>
                        @if (Route::has('login'))
                         
                                @auth
                                   <li><a href="{{ url('/dashboard') }}"
                                       >PANEL DE USUARIO</a></li>
                                @else
                                    <li><a href="{{ route('login') }}"
                                       >Iniciar Sesion</a></li>

                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}"
                                            >Registrarse</a></li>
                                    @endif
                                @endauth

                        @endif
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </header>
    <!-- End Navbar -->

    <div id="wrapper">

        <!-- Hero
  ================================================== -->
        <section>
            <div id="hero-section" class="landing-hero img-fluid"
                style="background-image: url(fondo.jpg); background-size: cover; data-stellar-background-ratio="0">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">

                                <div class="hero-text">
                                    <div class="herolider">
                                        <ul class="caption-slides">

                                            <li class="caption">
                                                <h1>MOTO FIX</h1>
                                                <div class="div-line"></div>
                                                <p class="hero">repuestos de todo &amp; Web Development</p>
                                            </li>

                                            <li class="caption">
                                                <h1>RESPUESTOS - MOTOS</h1>
                                                <div class="div-line"></div>
                                                <p class="hero">Design &amp; Development</p>
                                            </li>

                                            <li class="caption">
                                                <h1>HIGH QUALITY CODE</h1>
                                                <div class="div-line"></div>
                                                <p class="hero">HTML5 &amp; CSS3</p>
                                            </li>

                                        </ul>
                                    </div> <!-- end herolider -->
                                </div> <!-- end hero-text -->

                                <div class="hero-btn">
                                    <a href="#landing-offer" class="btn btn-clean">Read more</a>
                                </div> <!-- end hero-btn -->

                            </div> <!-- end col-md-6 -->
                        </div> <!-- end row -->
                    </div> <!-- End container -->
                </div> <!-- End hero-content -->
            </div> <!-- End hero-section -->
        </section>
        <!-- End hero section -->

        <!-- Offer
    ================================================== -->
        <section>
            <div id="landing-offer" class="pad-sec">
                <div class="container">

                    <div class="title-section big-title-sec animated out" data-animation="fadeInUp" data-delay="0">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2 class="big-title">Some information about us</h2>
                                <h1 class="big-subtitle">We’re small branding &amp; digital studio</h1>
                                <hr>
                                <p class="about-text">Cras porta dolor ut velit imperdiet, quis sodales tellus
                                    facilisis. Vestibulum magna turpis, tincidun blandit semper lorem. Mauris nodesterin
                                    feugiat neque, a aliquet ligula. Sed non felis tincidunt, facilisis felis vitae,
                                    mollis est. Nulla sapien dui, feugiat sed velit a, egestas porta magna.</p>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- end title-section -->

                    <div class="offer-boxes">

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="offer-post text-center animated out" data-animation="fadeInLeft"
                                    data-delay="0">
                                    <div class="offer-icon">
                                        <span class="icon-desktop"></span>
                                    </div>
                                    <h4>DESIGNS &amp; INTERFACES</h4>
                                    <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna. Quisque id
                                        libero risus. Aliquam accumsan erat id sem placerat tempus.</p>
                                </div> <!-- End offer-post -->
                            </div> <!-- End col-sm-4 -->

                            <div class="col-sm-4">
                                <div class="offer-post text-center animated out" data-animation="fadeInUp"
                                    data-delay="0">
                                    <div class="offer-icon">
                                        <span class="icon-piechart"></span>
                                    </div>
                                    <h4>Branding</h4>
                                    <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna. Quisque id
                                        libero risus. Aliquam accumsan erat id sem placerat tempus.</p>
                                </div> <!-- End offer-post -->
                            </div> <!-- End col-sm-4 -->

                            <div class="col-sm-4">
                                <div class="offer-post text-center animated out" data-animation="fadeInRight"
                                    data-delay="0">
                                    <div class="offer-icon">
                                        <span class="icon-lifesaver"></span>
                                    </div>
                                    <h4>Dedicated support</h4>
                                    <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna. Quisque id
                                        libero risus. Aliquam accumsan erat id sem placerat tempus.</p>
                                </div> <!-- End offer-post -->
                            </div> <!-- End col-sm-4 -->

                        </div> <!-- End row -->

                    </div> <!-- End offer-boxes -->
                </div> <!-- End container -->
            </div> <!-- End landing-offer-section -->
        </section>
        <!-- End offer section -->

        <section>
            <div class="sep-section"></div>
        </section>

        <!-- Features services
    ================================================== -->
        <section>
            <div id="features-section" class="pad-sec">
                <div class="container">
                    <div class="title-section text-center animated out" data-animation="fadeInUp" data-delay="0">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2>What we do?</h2>
                                <hr>
                                <p>Seamlessly restore client-focused potentialities rather than functional strategic
                                    theme areas.</p>
                            </div> <!-- edn col-sm-8 -->
                        </div> <!-- End row -->
                    </div> <!-- end title-section -->
                    <div class="row">
                        <div class="col-md-3 without-padding">
                            <div class="left-features-services">
                                <ul class="features-list">
                                    <!-- feature -->
                                    <li>
                                        <div class="left-features-box animated out" data-animation="fadeInLeft"
                                            data-delay="0">
                                            <span class="iconbox"><i class="icon-mobile"></i></span>
                                            <div class="features-box-content">
                                                <h6>Mobile App</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.
                                                </p>
                                            </div> <!-- end features-box-content -->
                                        </div> <!-- end left-features-box -->
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="left-features-box animated out" data-animation="fadeInLeft"
                                            data-delay="0">
                                            <span class="iconbox"><i class="icon-browser"></i></span>
                                            <div class="features-box-content">
                                                <h6>Web design</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.
                                                </p>
                                            </div> <!-- end features-box-content -->
                                        </div> <!-- end left-features-box -->
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="left-features-box animated out" data-animation="fadeInLeft"
                                            data-delay="0">
                                            <span class="iconbox"><i class="icon-strategy"></i></span>
                                            <div class="features-box-content">
                                                <h6>Branding</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.
                                                </p>
                                            </div> <!-- end features-box-content -->
                                        </div> <!-- end left-features-box -->
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="left-features-box animated out" data-animation="fadeInLeft"
                                            data-delay="0">
                                            <span class="iconbox"><i class="icon-hotairballoon "></i></span>
                                            <div class="features-box-content">
                                                <h6>Logo design</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.
                                                </p>
                                            </div> <!-- end features-box-content -->
                                        </div> <!-- end left-features-box -->
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="left-features-box animated out" data-animation="fadeInLeft"
                                            data-delay="0">
                                            <span class="iconbox"><i class="icon-lightbulb"></i></span>
                                            <div class="features-box-content">
                                                <h6>Illustrations</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.
                                                </p>
                                            </div> <!-- end features-box-content -->
                                        </div> <!-- end left-features-box -->
                                    </li>
                                </ul> <!-- end features-list -->
                            </div> <!-- end left-features-service -->
                        </div><!--  end col-md-3 -->

                        <div class="col-md-6">
                            <div class="features-image animated out" data-animation="fadeInUp" data-delay="0">
                                <img src="assets/images/temp/woman.jpg" alt="">
                            </div> <!-- end features-image -->
                        </div> <!-- end col-md-6 -->

                        <div class="col-md-3 without-padding">
                            <div class="right-features-services">
                                <ul class="features-list">
                                    <!-- feature -->
                                    <li>
                                        <div class="right-features-box animated out" data-animation="fadeInRight"
                                            data-delay="0">
                                            <span class="iconbox"><i class="icon-tools-2"></i></span>
                                            <div class="features-box-content">
                                                <h6>Easy Customization</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="right-features-box animated out" data-animation="fadeInRight"
                                            data-delay="0">
                                            <span class="iconbox"><i class="icon-video"></i></span>
                                            <div class="features-box-content">
                                                <h6>Video</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="right-features-box animated out" data-animation="fadeInRight"
                                            data-delay="0">
                                            <span class="iconbox"><i class="icon-camera"></i></span>
                                            <div class="features-box-content">
                                                <h6>Photography</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="right-features-box animated out" data-animation="fadeInRight"
                                            data-delay="0">
                                            <span class="iconbox"><i class="icon-presentation"></i></span>
                                            <div class="features-box-content">
                                                <h6>Marketing</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="right-features-box animated out" data-animation="fadeInRight"
                                            data-delay="0">
                                            <span class="iconbox"><i class="fa fa-life-ring"></i></span>
                                            <div class="features-box-content">
                                                <h6>Support</h6>
                                                <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul> <!-- end features-list -->
                            </div>
                        </div> <!-- end col-md-3 -->

                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </section>
        <!-- End features-section -->

        <!-- Video section
    ================================================== -->
        <section>
            <div id="video-section" data-stellar-background-ratio="0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="video-section-content text-center">
                                <a href="http://vimeo.com/channels/staffpicks/116829150" class="video-pop-up"><i
                                        class="fa fa-play"></i></a>
                                <div class="video-head">Introducing Video</div>
                                <div class="video-sub-heading">Check out our video presentation</div>
                            </div>
                        </div> <!-- end col-sm-6 -->
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </section>
        <!-- End Video section -->

        <!-- Team
    ================================================== -->
        <section>
            <div id="team-section" class="pad-sec">
                <div class="container">
                    <div class="title-section animated out" data-animation="fadeInUp" data-delay="0">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2>Our awesome team</h2>
                                <hr>
                                <p>Seamlessly restore client-focused potentialities rather than functional strategic
                                    theme areas. Credibly e-enable value-added portals with clicks-and-mortar
                                    initiatives.</p>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- end title-section -->

                    <div class="team-members">
                        <div class="row">

                            <!-- member-team -->
                            <div class="col-sm-4">
                                <div class="member-team animated out" data-animation="fadeInLeft" data-delay="0">
                                    <img src="assets/images/team/m1.jpg" alt="">
                                    <div class="magnifier">
                                        <div class="magnifier-inner">
                                            <h3>MICHAEL ROOF</h3>
                                            <p>Co_founder &amp; Designer</p>
                                            <p>We’ll etch your brand onto tangible objects: business cards, ads,
                                                stickers, brochures, you name it. You won’t see business cards, ads,
                                                stickers, brochures anything until we’re done drooling at the result.
                                            </p>
                                            <ul class="social-icons">

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Facebook" href="#"
                                                        data-original-title="" title=""><i
                                                            class="fa fa-facebook"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Twitter" href="#"
                                                        data-original-title="" title=""><i
                                                            class="fa fa-twitter"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Google Plus"
                                                        href="#" data-original-title="" title=""><i
                                                            class="fa fa-google-plus"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Skype" href="#"
                                                        data-original-title="" title=""><i
                                                            class="fa fa-skype"></i></a></li>

                                            </ul>
                                        </div> <!-- End magnifier-inner -->
                                    </div> <!-- End magnifier -->
                                </div> <!-- End member-team -->
                            </div> <!-- End col-sm-4 -->

                            <!-- member-team -->
                            <div class="col-sm-4">
                                <div class="member-team animated out" data-animation="fadeInUp" data-delay="0">
                                    <img src="assets/images/team/m2.jpg" alt="">
                                    <div class="magnifier">
                                        <div class="magnifier-inner">
                                            <h3>CHARLES WHITE</h3>
                                            <p>Co_founder &amp; Designer</p>
                                            <p>We’ll etch your brand onto tangible objects: business cards, ads,
                                                stickers, brochures, you name it. You won’t see business cards, ads,
                                                stickers, brochures anything until we’re done drooling at the result.
                                            </p>
                                            <ul class="social-icons">

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Facebook" href="#"
                                                        data-original-title="" title=""><i
                                                            class="fa fa-facebook"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Twitter" href="#"
                                                        data-original-title="" title=""><i
                                                            class="fa fa-twitter"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Google Plus"
                                                        href="#" data-original-title="" title=""><i
                                                            class="fa fa-google-plus"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Skype" href="#"
                                                        data-original-title="" title=""><i
                                                            class="fa fa-skype"></i></a></li>

                                            </ul>
                                        </div> <!-- End magnifier-inner -->
                                    </div> <!-- End magnifier -->
                                </div> <!-- End member-team -->
                            </div> <!-- End col-sm-4 -->

                            <!-- member-team -->
                            <div class="col-sm-4">
                                <div class="member-team animated out" data-animation="fadeInRight" data-delay="0">
                                    <img src="assets/images/team/m3.jpg" alt="">
                                    <div class="magnifier">
                                        <div class="magnifier-inner">
                                            <h3>MARTIN CAMBRIGE</h3>
                                            <p>Head Support</p>
                                            <p>We’ll etch your brand onto tangible objects: business cards, ads,
                                                stickers, brochures, you name it. You won’t see business cards, ads,
                                                stickers, brochures anything until we’re done drooling at the result.
                                            </p>
                                            <ul class="social-icons">

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Facebook" href="#"
                                                        data-original-title="" title=""><i
                                                            class="fa fa-facebook"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Twitter" href="#"
                                                        data-original-title="" title=""><i
                                                            class="fa fa-twitter"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Google Plus"
                                                        href="#" data-original-title="" title=""><i
                                                            class="fa fa-google-plus"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover"
                                                        data-placement="bottom" data-title="Skype" href="#"
                                                        data-original-title="" title=""><i
                                                            class="fa fa-skype"></i></a></li>

                                            </ul>
                                        </div> <!-- End magnifier-inner -->
                                    </div> <!-- End magnifier -->
                                </div> <!-- End member-team -->
                            </div> <!-- End col-sm-4 -->

                        </div>
                    </div> <!-- End team-members -->
                </div> <!-- End container -->
            </div> <!-- End team-section -->
        </section>
        <!-- End team section -->

        <!-- About Team
    ================================================== -->
        <section>
            <div id="about-team">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="title-section">
                                <h3>Our team skills</h3>
                            </div>
                            <p>Sit ad etiam dissentias, viderer intellegebat usu et, per aliquam delectus ut. In inermis
                                suavitate tincidunt quo, habeo lorem quis nulla eget, dictum pretium magna. Praesent id
                                metus mattis tellus consectetur posuere. Aenean vel enim ut massa luctus efficitur a nec
                                magna.</p>
                        </div> <!-- end col-md-6 -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="progress-bars">

                                <!-- skillbar -->
                                <div class="p-bar">
                                    <!-- meta -->
                                    <div class="progress-meta">
                                        <h6 class="progress-title">photoshop</h6>
                                        <h6 class="progress-value">75%</h6>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" aria-valuenow="75" role="progressbar"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div> <!-- end p-bar -->

                                <!-- skillbar -->
                                <div class="p-bar">
                                    <!-- meta -->
                                    <div class="progress-meta">
                                        <h6 class="progress-title">html</h6>
                                        <h6 class="progress-value">95%</h6>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" aria-valuenow="95" role="progressbar"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div> <!-- end p-bar -->

                                <!-- skillbar -->
                                <div class="p-bar">
                                    <!-- meta -->
                                    <div class="progress-meta">
                                        <h6 class="progress-title">css</h6>
                                        <h6 class="progress-value">85%</h6>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" aria-valuenow="85" role="progressbar"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div> <!-- end p-bar -->

                                <!-- skillbar -->
                                <div class="p-bar">
                                    <!-- meta -->
                                    <div class="progress-meta">
                                        <h6 class="progress-title">jquery</h6>
                                        <h6 class="progress-value">73%</h6>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" aria-valuenow="73" role="progressbar"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div> <!-- end p-bar -->

                            </div> <!-- end skills-bars -->
                        </div> <!-- end col-md-6 -->
                    </div> <!-- end row -->
                </div>
            </div>
        </section>
        <!-- End About Team -->



        <section>
            <div class="sep-section"></div>
        </section>



        <section>
            <div class="sep-section"></div>
        </section>




        <section>
            <div class="sep-section"></div>
        </section>



        <!-- Contact-section
    ================================================== -->



        <!-- Footer
    ================================================== -->
        <footer>
            <div id="footer-section" class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <ul class="footer-social-links">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Dribbble</a></li>
                                <li><a href="#">Behance</a></li>
                                <li><a href="#">Pinterest</a></li>
                            </ul>
                            <p class="copyright">
                                &copy; 2022 MOTOS Y REPUESTOS - Copyright <a href="http://templatestock.co">Template
                                    Stock</a>
                            </p>
                        </div> <!-- End col-sm-8 -->
                    </div> <!-- End row -->
                </div> <!-- End container -->
            </div> <!-- End footer-section  -->
        </footer>
        <!-- End footer -->

    </div> <!-- End wrapper -->

    <!-- Back-to-top
  ================================================== -->
    <div class="back-to-top">
        <i class="fa fa-angle-up fa-3x"></i>
    </div> <!-- end back-to-top -->

    <!-- JS libraries and scripts -->
    <script src="{{ asset('salient/assets/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('salient/assets/js/bootstrap.min.js') }}"></script>
    <script src="salient/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="salient/assets/js/jquery.appear.min.js"></script>
    <script src="salient/assets/js/jquery.bxslider.min.js"></script>
    <script src="salient/assets/js/jquery.owl.carousel.min.js"></script>
    <script src="salient/assets/js/jquery.countTo.js"></script>
    <script src="salient/assets/js/jquery.easing.1.3.js"></script>
    <script src="salient/assets/js/jquery.imagesloaded.min.js"></script>
    <script src="salient/assets/js/jquery.isotope.js"></script>
    <script src="salient/assets/js/jquery.placeholder.js"></script>
    <script src="salient/assets/js/jquery.smoothscroll.js"></script>
    <script src="salient/assets/js/jquery.stellar.min.js"></script>
    <script src="salient/assets/js/jquery.waypoints.js"></script>
    <script src="salient/assets/js/jquery.fitvids.js"></script>
    <script src="salient/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="salient/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="salient/assets/js/jquery.countdown.js"></script>
    <script src="salient/assets/js/jquery.navbar-scroll.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="salient/assets/js/jquery.gmaps.js"></script>
    <script src="salient/assets/js/main.js"></script>

</body>

</html>
