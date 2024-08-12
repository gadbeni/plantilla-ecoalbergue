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


    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css')}}">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css')}}">


    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png')}}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <meta name="description"
        content="Escapate a un paraíso tropical de relajación y rejuvenecimiento. Descubre joyas escondidas de bienestar en nuestras selvas y maravillas." />

    <!--facebook open graph-->
    <meta property="og:title" content="Escapate a un paraíso tropical de relajación y rejuvenecimiento" />
    <meta property="og:description" content="Descubre joyas escondidas de bienestar en nuestras selvas y maravillas." />
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css')}}">

    <!-- Para pantallas de ancho ≥768px -->
    <link rel="stylesheet" href="{{ asset('assets/css/medium.css')}}" media="(min-width: 768px)">
    <!-- Para pantallas de ancho ≥992px -->
    <link rel="stylesheet" href="{{ asset('assets/css/large.css')}}" media="(min-width: 992px)">
    <title>AGUAYSAL</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="navbar  header-scroll">
                <div class="container  full-container-max" style="max-width: 1925px;">
                    <div class="container-btn-menu lateral-header">
                        <div id="btn-menu">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </div>
                        <span class="title-btn">
                            MENÚ
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
    @yield('content')

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
    <footer class="text-center text-lg-start text-dark">
        <!-- Section: Social media -->
        <section class="full-container-max d-flex justify-content-between p-4 text-white" style="background-color: #21D192">
            <!-- Left -->
            <div class="me-5">
                <span>Conéctate con nosotros en las redes sociales:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://www.facebook.com/Aguaysalecoalbergue" target="_blank" class="text-white me-3 ">
                    <i class="fab bi-facebook fs-2x display-6"></i>
                </a>
                <a href="https://twitter.com" class="text-white me-4">
                    <i class="fab fa-twitter fs-2x display-6"></i>
                </a>
                <a href="https://plus.google.com" class="text-white me-4">
                    <i class="fab bi-whatsapp fs-2x display-6"></i>
                </a>
                <a href="https://www.instagram.com" class="text-white me-4">
                    <i class="fab fa-instagram fs-2x display-6"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <div class="full-container-max text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3 me-0 ms-0">
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
                        <a href="#" class="text-dark">Sobre Nosotros</a>
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
        <div class="full-container-max text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            &copy; <span class="dynamic-year"></span> Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">GADBENI</a>. Todos los derechos reservados.
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    {{-- <script>
        const label = document.querySelector(".social-media-toggle label");
        label.addEventListener("mouseover", function() {
          label.click();
        });
    </script> --}}
    <script src="{{ asset('assets/js/lightbox-plus-jquery.min.js') }}" ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/scriptpage.js') }}"></script>


</body>

</html>

