<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                            Somos una empresa enfocada a proporcionar un servicio personalizado al huésped para satisfacer sus necesidades de alojamiento, alimento y sobrepasar sus expectativas a través del trabajo en equipo y el compromiso de nuestros colaboradores para ofrecer lo mejor en su estadía de manera sustentable con un compromiso y respeto hacia nuestro medio ambiente, social y cultural. 
                        </p>
                    </div>
                    <div>
                        <h4>VISIÓN </h4>
                        <p> 
                            Reconocernos nacional e internacionalmente por ser un lugar íntimo, privado y confiable para el huésped, ofreciéndole un alojamiento de calidad y nuestra variedad de alimentos locales, así como una experiencia única e inolvidable al involucrarlo en actividades al aire libre con un paisaje natural entregando una sensación de paz y bienestar.
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
                                <img src="{{asset('assets/img/prueba.jpg')}}"" class="card-img-top" alt="...">
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
                        <div class="card" >
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}"" class="card-img-top" alt="...">
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
                        <div class="card" >
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}"" class="card-img-top" alt="...">
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
                        <div class="card" >
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}"" class="card-img-top" alt="...">
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
                        <div class="card" >
                            <div class="img-wrapper">
                                <img src="{{asset('assets/img/prueba.jpg')}}"" class="card-img-top" alt="...">
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
                                <img src="{{asset('assets/img/prueba.jpg')}}"" class="card-img-top" alt="...">
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
