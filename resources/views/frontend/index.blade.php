<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css')}}">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png')}}">


    <meta name="description"
        content="Escapate a un paraíso tropical de relajación y rejuvenecimiento. Descubre joyas escondidas de bienestar en nuestras selvas y maravillas." />

    <!--facebook open graph-->
    <meta property="og:title" content="Escapate a un paraíso tropical de relajación y rejuvenecimiento" />
    <meta property="og:description" content="Descubre joyas escondidas de bienestar en nuestras selvas y maravillas." />
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <title>AGUAYSAL</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="navbar">
                <div class="container-btn-menu lateral-header">
                    <div id="btn-menu">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div>
                    <span class="title-btn">
                        MENU
                    </span>
                </div>
                <div>
                    <img class="logo-white" src="{{ asset('assets/img/white-logo.png')}}" alt="Logo" width="100px">
                    <img class="logo" src="{{ asset('assets/img/logo.png')}}" alt="Logo" width="100px">
                </div>
                <div class="lateral-header">
                </div>
            </div>
        </div>
        <div id="menu" class="content-menu">
            <hr>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
            <hr>
            <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Art Gallery</a></li>
                <li><a href="#">Abouts Us</a></li>
            </ul>
            <div class="content-language">
                <div>
                    <a href="#">Español</a>
                </div>
                <div>
                    <a href="#">English</a>
                </div>
            </div>
        </div>

    </header>
    <main>
        <section id="hero">
            <div class="video-container">
                <video autoplay muted loop class="background-video">
                    <source src="{{ asset('assets/video/portada.mp4')}}" type="video/mp4">
                    Tu navegador no soporta el video HTML5.
                </video>
                <div class="overlay"></div>
            </div>
            <div class="content">
                <h1>Bienvenido a Mi Sitio Web</h1>
                <p>Este es un ejemplo de video de fondo.</p>
            </div>
        </section>

        <section id="second-section">
            <div class="full-container flex">
                <div class="left">
                    <h2>Bienvenidos al ecoalbergue turístico aguaysal</h2>
                    <h3>Sentí la emoción única de la aventura</h3>
                    <div>
                        <h4>MISIÓN </h4>
                        <p>
                            Somos una empresa enfocada a proporcionar un servicio personalizado al huésped para
                            satisfacer sus necesidades de alojamiento, alimento y sobrepasar sus expectativas a través
                            del trabajo en equipo y el compromiso de nuestros colaboradores para ofrecer lo mejor en su
                            estadía de manera sustentable con un compromiso y respeto hacia nuestro medio ambiente,
                            social y cultural.
                        </p>
                    </div>
                    <div>
                        <h4>VISIÓN </h4>
                        <p>
                            Reconocernos nacional e internacionalmente por ser un lugar íntimo, privado y confiable para
                            el huésped, ofreciéndole un alojamiento de calidad y nuestra variedad de alimentos locales,
                            así como una experiencia única e inolvidable al involucrarlo en actividades al aire libre
                            con un paisaje natural entregando una sensación de paz y bienestar.
                        </p>
                    </div>
                </div>
                <div class="right">
                    <img src="{{asset('assets/img/prueba.jpg')}}" alt="">
                </div>
            </div>
        </section>

        <section id="carousel-section">
            <div class="container">
                <span class="pre-title-section">Sea nuestro</span>
                <span class="title-section">Huésped</span>
            </div>
        </section>

        <section>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title h4 text-center">Card title</h5>
                                <div class="card-btns">
                                    <a href="#" class="btn">Go somewhere</a>
                                    <a href="#" class="btn">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title h4 text-center">Card title</h5>
                                <div class="card-btns">
                                    <a href="#" class="btn">Go somewhere</a>
                                    <a href="#" class="btn">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title h4 text-center">Card title</h5>
                                <div class="card-btns">
                                    <a href="#" class="btn">Go somewhere</a>
                                    <a href="#" class="btn">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title h4 text-center">Card title</h5>
                                <div class="card-btns">
                                    <a href="#" class="btn">Go somewhere</a>
                                    <a href="#" class="btn">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title h4 text-center">Card title</h5>
                                <div class="card-btns">
                                    <a href="#" class="btn">Go somewhere</a>
                                    <a href="#" class="btn">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title h4 text-center">Card title</h5>
                                <div class="card-btns">
                                    <a href="#" class="btn">Go somewhere</a>
                                    <a href="#" class="btn">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <br>
        {{-- PACKAGE --}}
        <style>
            .header-package {
                background-image: url('assets/img/textura.jpg');
                height: 300px;

                background-size: cover;
                background-position: center;
                color: white;
                padding: 4rem;
                margin-bottom: 20rem;
            }
        </style>
        <section aria-label="Paquetes Especiales">
            <div class="header-package">
                <div class="carousel slide" id="carouselExample1">
                    <h2 style="text-align: center;">Paquetes Especiales</h2>
                    <div class=" carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-12">
                                <div class="card">
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="{{asset('assets/img/a.webp')}}" class="card-img-top img-fluid"
                                                alt="..." aria-label="Imagen del paquete especial">
                                        </div>
                                        <figcaption>
                                            <div class="card-body">
                                                <h5 class="card-title">You can adjust the colors and gradient</h5>
                                                <a href="#" class="btn btn-primary">Ver detalle</a>
                                                <a href="#" class="btn btn-secondary">Reservar ahora</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-12">
                                <div class="card">
                                    <figure>
                                        <div class="img-wrapper">
                                            <img src="{{asset('assets/img/b.webp')}}" class="card-img-top img-fluid"
                                                alt="..." aria-label="Imagen del paquete especial">
                                        </div>
                                        <figcaption>
                                            <div class="card-body">
                                                <h5 class="card-title">You can adjust the colors and gradient</h5>
                                                <a href="#" class="btn btn-primary">Ver detalle</a>
                                                <a href="#" class="btn btn-secondary">Reservar ahora</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> --}}
                </div>
            </div>

        </section>

        <section class="container-fluid">
            <div class="row">
                <div class="col-lg-8 hero-image">
                    <img src="{{ asset('assets/img/aventura.jpg') }}" alt="Los Tajibos Hotel" class="img-fluid">
                </div>

                <div class="col-lg-4 hero-content">
                    <h2>Disfrute de sus beneficios</h2>
                    <p>Reserve ahora y obtenga acceso exclusivo a ofertas especiales.</p>

                    <a href="#" class="btn btn-primary">Reserve ahora</a>
                </div>
            </div>
        </section>

        {{-- SLIDER --}}
        <section id="slider" class="pt-5">
            <div class="container-fluid">
                <h2 class="text-center"><b>Responsive Owl Carousel</b></h2>
                <div class="slider">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <figure>
                                <img src="{{ asset('assets/img/a.webp') }}" alt="Imagen del paquete especial"
                                    aria-label="Imagen del paquete especial">
                                <figcaption>
                                    <p>Contacto: <a href="mailto:info@example.com">info@example.com</a></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="slider-card">
                            <figure>
                                <img src="{{ asset('assets/img/b.webp') }}" alt="Imagen del paquete especial"
                                    aria-label="Imagen del paquete especial">
                                <figcaption>
                                    <p>Contacto: <a href="mailto:info@example.com">info@example.com</a></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="slider-card">
                            <figure>
                                <img src="{{ asset('assets/img/c.webp') }}" alt="Imagen del paquete especial"
                                    aria-label="Imagen del paquete especial">
                                <figcaption>
                                    <p>Contacto: <a href="mailto:info@example.com">info@example.com</a></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="slider-card">
                            <figure>
                                <img src="{{ asset('assets/img/d.webp') }}" alt="Imagen del paquete especial"
                                    aria-label="Imagen del paquete especial">
                                <figcaption>
                                    <p>Contacto: <a href="mailto:info@example.com">info@example.com></a></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="slider-card">
                            <figure>
                                <img src="{{ asset('assets/img/e.webp') }}" alt="Imagen del paquete especial"
                                    aria-label="Imagen del paquete especial">
                                <figcaption>
                                    <p>Contacto: <a href="mailto:info@example.com">info@example.com></a></p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <style>
            .header-textura {
                background-image: url('assets/img/textura.jpg');
                height: 68vh;

                background-size: cover;
                background-position: center;
                color: white;
                padding: 10rem;
                margin-top: 10rem;
                margin-bottom: 16rem;
            }

            .event {
                display: block;
                margin: 0 auto;
                width: 55%;
                right: 12rem;
                position: relative;
                top: -250px;
                border-radius: 10px;
            }
            

            @media (max-width: 768px) {
                .event {
                    width: 100%;
                    right: 2rem;
                    top: 10px;
                    /* Ocupa el 90% del ancho en dispositivos medianos */
                }
            }

            @media (max-width: 576px) {
                .event {
                    width: 100%;
                    right: 2rem;
                    top: 10px;
                    /* Ocupa el 100% del ancho en dispositivos pequeños */
                }
             
            }
        </style>

        <section>
            <div class="header-textura">
                {{-- <div class="container"> --}}
                    {{-- <div class="row"> --}}
                        {{-- <div class="event"> --}}
                            <div class="event card text-bg-dark">
                                <img src="assets/img/imgtextura.webp" class="card-img"
                                    alt="Imagen del evento social y corporativo">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Eventos Sociales y Corporativos</h5>
                                    <p class="card-text">Organice su próximo evento en el Centro de Convenciones más
                                        grande
                                        situado en un hotel en Bolivia, con instalaciones y espacios sociales vibrantes.
                                        Cualquiera que sea su evento, le ayudaremos a hacerlo realidad.</p>
                                    <p class="card-text"><small>Última actualización hace 3 minutos</small></p>
                                    <a href="#" class="btn btn-primary">Ver todos los salones</a>
                                </div>
                            </div>
                        </div>
                        {{--
                    </div> --}}
                    {{-- </div> --}}
            </div>
        </section>

        <div class="container-fluid">
            <div class="tour-listing-two__carousel trevlo-owl__carousel trevlo-owl__carousel--basic-nav owl-theme owl-carousel"
                data-owl-options='{
                            "items": 3,
                            "margin": 30,
                            "smartSpeed": 700,
                            "loop":false,
                            "autoplay": 6000,
                            "nav":false,
                            "dots":true,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive":{
                                "0":{
                                    "items": 1
                                },
                                "768":{
                                    "items": 2
                                },
                                "1200":{
                                    "items": 3
                                }
                            }
                            }'>
                <div class="tour-listing-two__carousel-item item">
                    <div class="tour-listing-two__card tour-listing__card">
                        <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                            <img src="{{ asset('assets/img/tour-4-2.jpg')}}" alt="assets/images/tours/tour-4-2.jpg"
                                class="tour-listing__card-image">
                            <div class="tour-listing__card-image-overlay"></div>
                            <!-- /.tour-listing__card-image-overlay -->
                        </a><!-- /.tour-listing__card-image-box -->
                        <div class="tour-listing-two__card-show-content">
                            <div class="tour-listing-two__card-show-title-box">
                                <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a
                                        href="#">Travel by Boat & Enjoy</a></h3>
                            </div><!-- /.tour-listing-two__card-show-title-box -->

                        </div><!-- /.tour-listing__card-show-content -->
                        <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                            <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Travel by
                                    Boat & Enjoy</a></h3>
                            <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem
                                Ipsum agtilable</p>
                        </div><!-- /.tour-listing__card-content -->
                    </div><!-- /.tour-listing__card -->
                </div><!-- /.tour-listing-two__carousel-item item -->

                <div class="tour-listing-two__carousel-item item">
                    <div class="tour-listing-two__card tour-listing__card">
                        <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                            <img src="{{ asset('assets/img/tour-4-2.jpg')}}" alt="assets/images/tours/tour-4-2.jpg"
                                class="tour-listing__card-image">
                            <div class="tour-listing__card-image-overlay"></div>
                            <!-- /.tour-listing__card-image-overlay -->
                        </a><!-- /.tour-listing__card-image-box -->
                        <div class="tour-listing-two__card-show-content">
                            <div class="tour-listing-two__card-show-title-box">
                                <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a
                                        href="#">Travel by Boat & Enjoy</a></h3>
                            </div><!-- /.tour-listing-two__card-show-title-box -->

                        </div><!-- /.tour-listing__card-show-content -->
                        <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                            <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Travel by
                                    Boat & Enjoy</a></h3>
                            <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem
                                Ipsum agtilable</p>
                        </div><!-- /.tour-listing__card-content -->
                    </div><!-- /.tour-listing__card -->
                </div><!-- /.tour-listing-two__carousel-item item -->

                <div class="tour-listing-two__carousel-item item">
                    <div class="tour-listing-two__card tour-listing__card">
                        <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                            <img src="{{ asset('assets/img/tour-4-2.jpg')}}" alt="assets/images/tours/tour-4-2.jpg"
                                class="tour-listing__card-image">
                            <div class="tour-listing__card-image-overlay"></div>
                            <!-- /.tour-listing__card-image-overlay -->
                        </a><!-- /.tour-listing__card-image-box -->
                        <div class="tour-listing-two__card-show-content">
                            <div class="tour-listing-two__card-show-title-box">
                                <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a
                                        href="#">Travel by Boat & Enjoy</a></h3>
                            </div><!-- /.tour-listing-two__card-show-title-box -->

                        </div><!-- /.tour-listing__card-show-content -->
                        <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                            <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Travel by
                                    Boat & Enjoy</a></h3>
                            <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem
                                Ipsum agtilable</p>
                        </div><!-- /.tour-listing__card-content -->
                    </div><!-- /.tour-listing__card -->
                </div><!-- /.tour-listing-two__carousel-item item -->

                <div class="tour-listing-two__carousel-item item">
                    <div class="tour-listing-two__card tour-listing__card">
                        <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                            <img src="{{ asset('assets/img/tour-4-2.jpg')}}" alt="assets/images/tours/tour-4-2.jpg"
                                class="tour-listing__card-image">
                            <div class="tour-listing__card-image-overlay"></div>
                            <!-- /.tour-listing__card-image-overlay -->
                        </a><!-- /.tour-listing__card-image-box -->
                        <div class="tour-listing-two__card-show-content">
                            <div class="tour-listing-two__card-show-title-box">
                                <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a
                                        href="#">Travel by Boat & Enjoy</a></h3>
                            </div><!-- /.tour-listing-two__card-show-title-box -->

                        </div><!-- /.tour-listing__card-show-content -->
                        <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                            <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Travel by
                                    Boat & Enjoy</a></h3>
                            <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem
                                Ipsum agtilable</p>
                        </div><!-- /.tour-listing__card-content -->
                    </div><!-- /.tour-listing__card -->
                </div><!-- /.tour-listing-two__carousel-item item -->


                <div class="tour-listing-two__carousel-item item">
                    <div class="tour-listing-two__card tour-listing__card">
                        <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                            <img src="{{ asset('assets/img/tour-4-2.jpg')}}" alt="assets/images/tours/tour-4-2.jpg"
                                class="tour-listing__card-image">
                            <div class="tour-listing__card-image-overlay"></div>
                            <!-- /.tour-listing__card-image-overlay -->
                        </a><!-- /.tour-listing__card-image-box -->
                        <div class="tour-listing-two__card-show-content">
                            <div class="tour-listing-two__card-show-title-box">
                                <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a
                                        href="#">Travel by Boat & Enjoy</a></h3>
                            </div><!-- /.tour-listing-two__card-show-title-box -->

                        </div><!-- /.tour-listing__card-show-content -->
                        <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                            <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Travel by
                                    Boat & Enjoy</a></h3>
                            <p class="tour-listing__card-text text-small">There are of Lorem
                                Ipsum agtilable</p>
                        </div><!-- /.tour-listing__card-content -->
                    </div><!-- /.tour-listing__card -->
                </div><!-- /.tour-listing-two__carousel-item item -->

                <div class="tour-listing-two__carousel-item item">
                    <div class="tour-listing-two__card tour-listing__card">
                        <a href="tour-listing-details-right.html" class="tour-listing__card-image-box">
                            <img src="{{ asset('assets/img/tour-4-2.jpg')}}" alt="assets/images/tours/tour-4-2.jpg"
                                class="tour-listing__card-image">
                            <div class="tour-listing__card-image-overlay"></div>
                            <!-- /.tour-listing__card-image-overlay -->
                        </a><!-- /.tour-listing__card-image-box -->
                        <div class="tour-listing-two__card-show-content">
                            <div class="tour-listing-two__card-show-title-box">
                                <h3 class="tour-listing-two__card-show-title tour-listing__card-title"><a
                                        href="#">Travel by Boat & Enjoy</a></h3>
                            </div><!-- /.tour-listing-two__card-show-title-box -->

                        </div><!-- /.tour-listing__card-show-content -->
                        <div class="tour-listing-two__card-hover-content tour-listing__card-content">
                            <h3 class="tour-listing__card-title"><a href="tour-listing-details-right.html">Travel by
                                    Boat & Enjoy</a></h3>
                            <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem
                                Ipsum agtilable</p>
                        </div><!-- /.tour-listing__card-content -->
                    </div><!-- /.tour-listing__card -->
                </div><!-- /.tour-listing-two__carousel-item item -->

            </div><!-- /.tour-listing-two__carousel -->
        </div><!-- /.container -->


    </main>
    {{-- BOTON REDES SOCIALES --}}
    <nav class="social-media-nav">
        <input type="checkbox" id="social-media-toggle">
        <div class="social-media-links">
            <a href="#" class="bi bi-facebook" aria-label="Facebook"></a>
            <a href="#" class="bi bi-whatsapp" aria-label="WhatsApp"></a>
            <a href="#" class="bi bi-messenger" aria-label="Messenger"></a>
        </div>
        <div class="social-media-toggle">
            <label for="social-media-toggle">
                <i class="bi bi-wechat"></i>
                <i class="bi bi-x"></i>
            </label>
        </div>
    </nav>


    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark main-footer">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 text-white" style="background-color: #21D192">
            <!-- Left -->
            <div class="me-5">
                <span>Conéctate con nosotros en las redes sociales:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://www.facebook.com/Aguaysalecoalbergue" target="_blank" class="text-white me-3 ">
                    <i class="bi bi-facebook fs-2x display-6"></i>
                </a>
                {{-- <a href="https://twitter.com" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a> --}}
                <a href="https://plus.google.com" class="text-white me-4">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a href="https://www.instagram.com" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <div class=" text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">Nombre de la Empresa</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        Aquí puedes utilizar filas y columnas para organizar el contenido de tu pie de página. Lorem
                        ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Institución</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <a href="destinations.html" class="text-dark">Destino</a>
                    </p>
                    <p>
                        <a href="{{ route('about') }}" class="text-dark">Sobre Nosotros</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Explorar</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <a href="tour-listing-1.html" class="text-dark">Listados de Tours</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contacto</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <i class="fas fa-envelope mr-3"></i>
                        <a href="mailto:{{setting('contacto.email')}}"
                            class="text-dark">Email{{setting('contacto.email')}}</a>
                    </p>
                    <p><i class="fas fa-phone mr-3"></i> <a href="tel:{{setting('contacto.phone')}}"
                            class="text-dark">Teléfono{{setting('contacto.phone')}}</a></p>
                    <p><i class="fas fa-print mr-3"></i> <a href="https://wa.me/59171124428" target="_blank"
                            class="text-dark">WhatsApp: (591) 71124428</a></p>
                    <p><i class="fas fa-phone mr-3"></i> <a href="https://www.facebook.com/Aguaysalecoalbergue"
                            target="_blank" class="text-dark">Agua y sal ecoalbergue</a></p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            &copy; <span class="dynamic-year"></span> Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">GADBENI</a>. Todos los derechos reservados.
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>