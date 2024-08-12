@extends('frontend.index')

@section('content')
<main>
    <section id="hero">
        <div class="video-container">
            <video autoplay muted loop class="background-video full-container-max">
                <source src="{{ asset('assets/video/portada.webm')}}" type="video/mp4">
                Tu navegador no soporta el video HTML5.
            </video>
            <div class="overlay full-container-max"></div>
        </div>
        <div class="content">
            <h1>SENTÍ LA EMOCIÓN ÚNICA DE LA AVENTURA</h1>
            <p>Bienvenidos a Aguaysal</p>
        </div>
    </section>

    <section id="second-section">
        <div class="full-container-max flex">
            <div class="left">
                <h2></h2>
                <div>
                    <h4>DESCRIPCIÓN DEL ALOJAMIENTO</h4>
                    <p>
                        Aguaysal se encuentra en Santa Rosa del Yacuma, en la región del departamento del Beni, y está rodeado de naturaleza. El Albergue está dentro del Área Protegida Pampas del Yacuma, dispone de churrasqueras y parking privados gratis.
                        <br>
                        Las cabañas tienen acceso a un balcón de reposo con hamaqueros, cuenta con espacio para 3 personas, televisión y aire acondicionado. Hay toallas y ropa de cama en las cabañas.
                        <br>
                        El aeropuerto más cercano (Aeropuerto Regional y Turístico de Rurrenabaque) está a 222 km del alojamiento, que ofrece.
                    </p>
                </div>
                {{-- <div>
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
                </div> --}}
            </div>
            <div class="right">
                <img src="{{asset('img/ecoalbergue.webp')}}" alt="">
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
        <div id="carouselExample" class="carousel slide full-container-max">
            <div id="carousel-inner" class="carousel-inner">
                @foreach ($rooms as $room)
                <div @if ($loop->first)
                    class="carousel-item active"
                    @else
                    class="carousel-item"
                    @endif
                    >
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{Voyager::image($room->image)}}" class="card-img-top" alt="...">
                            <div class="icons-image">
                                <div class="item-image">
                                    <i class="fa-solid fa-user"></i>
                                    <div>
                                        <span>{{$room->capacity}}
                                            @if ($room->capacity > 1)
                                            Personas
                                            @else
                                            Persona
                                            @endif
                                        </span>
                                    </div>
                                </div>

                                <div class="item-image">
                                    <i class="fa-solid fa-bed"></i>
                                    <span>{{$room->bed_type}} </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title h4 text-center">{{$room->title}}</h5>
                            <div class="card-btns">
                                <a href="{{route('room.public.show', $room->id)}}" class="btn">Ver Detalles</a>
                                <a href="#" class="btn">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button id="carousel-control-next" class="carousel-control-next" type="button"
                data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container">
            <div class="text-center my-5">
                <a href="#" class="btn btn-outline-aguysal">Ver más Habitaciones</a>
            </div>
        </div>
    </section>
    <br>

    {{-- PACKAGE --}}
    <section aria-label="Paquetes Especiales">
        <div class="header-package full-container-max px-lg-5" style="background-image: url('img/textura_alrga_verde.png');">
            <div class="carousel slide " id="carouselExample1">
                <h2 style="text-align: center;">Paquetes Especiales</h2>
                <div class=" carousel-inner">
                    @foreach ( $specialPackages as $package )
                        <div @if ($loop->first)
                            class="carousel-item active"
                            @else
                            class="carousel-item"
                            @endif
                        >
                            <div class="card">
                                <div class="img-wrapper">
                                    <img src="{{Voyager::image($package->image)}}" class="card-img-top" alt="...">

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title h4 text-center">{{ $package->title }}</h5>
                                    <div class="card-btns">
                                        <a href="{{route('specialpackage.public.show', $package->id)}}" class="btn">Ver Detalles</a>
                                        <a href="#" class="btn">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

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
        {{-- <div class="container">
            <div class="text-center my-5">
                <a href="{{ route('about') }}" class="btn btn-outline-aguysal">Ver más Habitaciones</a>
            </div>
        </div> --}}
    </section>

    {{-- <section class="container-fluid full-container-max">
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
    </section> --}}

    {{-- SLIDER --}}
    {{-- <section id="slider" class="pt-5">
        <div class="container-fluid  full-container-max">
            <h2 class="text-center"><b>Responsive Owl Carousel</b></h2>
            <div class="slider">
                <div class="owl-carousel">
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

                </div>
            </div>
        </div>
    </section> --}}


    <style>
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

    <style>
        .fa.fa-angle-left,
        .fa.fa-angle-right
        {
            background: #ffffff;
        }
    </style>



    <div class="container1  full-container-max">
        <div class="slider1">
            <div class="slides" style="background-image: url('assets/img/img1.webp');">
                {{-- <div class="content1">
                    <div class="name">Alemania</div>
                    <div class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                    <button>ver mas</button>
                </div> --}}
            </div>
            <div class="slides" style="background-image: url('assets/img/img2.webp');">
                {{-- <div class="content1">
                    <div class="name">Flinandia</div>
                    <div class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                    <button>ver mas</button>
                </div> --}}
            </div>
            <div class="slides" style="background-image: url('assets/img/img3.webp');">
                {{-- <div class="content1">
                    <div class="name">Islandia</div>
                    <div class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                    <button>ver mas</button>
                </div> --}}
            </div>
            <div class="slides" style="background-image: url('assets/img/img4.webp');">
                {{-- <div class="content1">
                    <div class="name">Australia</div>
                    <div class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </div>
                    <button>ver mas</button>
                </div> --}}
            </div>
            <div class="slides" style="background-image: url('assets/img/img5.webp');">
                {{-- <div class="content1">
                    <div class="name">Netherland</div>
                    <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                    <button>See More</button>
                </div> --}}
            </div>
            <div class="slides" style="background-image: url('assets/img/img6.webp');">
                {{-- <div class="content1">
                    <div class="name">Ireland</div>
                    <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                    <button>See More</button>
                </div> --}}
            </div>
        </div>
        <div class="buttons">
            <span class="prev1"></span>
            <span class="next1"></span>
        </div>
    </div>
</main>
@endsection
