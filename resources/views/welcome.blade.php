@extends('frontend.index')

@section('meta')
<meta name="description"
    content="EcoAlbergue Turístico AGUAYSAL. Un paraíso tropical de relajación y rejuvenecimiento en BENI BOLIVIA. 
    Descubre joyas escondidas de bienestar en nuestras selvas y maravillas." />
@endsection    

@section('header')
    @include('frontend.navigation.header', ['menu' => 'main', 'className' => ''])
@endsection

@section('content')
<main>
    <section id="hero">
        <div class="video-container">
            <video autoplay muted loop class="background-video full-container-max">
                <source src="{{ asset('assets/video/portada.webm')}}" type="video/webm">
                Tu navegador no soporta el video HTML5.
            </video>
            <div class="overlay full-container-max"></div>
        </div>
        <div class="content">
            <h1>{{ setting('site.title') }}</h1>
            <p>{{ setting('site.subtitle') }}</p>
        </div>
    </section>
    <section class="m-5">
        <div class="full-container-max flex">
            <h2>¿QUÉ ES EL ECO ALBERGUE “AGUAYSAL” EN BENI BOLIVIA?</h2>
            <p>Es un proyecto de inversión que se crea a partir de la idea de exhibir a nivel nacional e internacional las riquezas ecológicas que tienen las Pampas del Yacuma, que al ser las menos exploradas a nivel mundial, se convierten en un potencial destino turístico de alta afluencia, apoyándose en la observación de especies endémicas de la región en su hábitat natural, como ser el Mono Lucachi, la Paraba Barba Azul y lagunas que forman parte del Sitio RAMSAR Yata.</p>
        </div>
    </section>
    <section id="second-section">
        <div class="full-container-max flex">
            <div class="left">
                <div>
                    <h3 class="h4">{{ $page->title }}</h3>
                    <h4>DESCRIPCIÓN DEL ALOJAMIENTO</h4>
                    <p>{!! \Illuminate\Support\Str::limit($page->body, 650, '...') !!}</p>
                     {{-- <p>{!! $page->body !!}</p> --}}
                </div>
            </div>
            <div class="right">
                    <img src="{{Voyager::image($page->thumbnail('medium'))}}" alt="{{ $page->title }}"/>
            </div>
        </div>
        <div class="container">
            <div class="text-center my-5">
                <a href="{{ route('about') }}" class="btn btn-outline-aguysal">Ver más sobre aguaysal</a>
            </div>
        </div>
    </section>

    <section id="carousel-section">
        <div class="container">
            <span class="pre-title-section">Conoce nuestras</span>
            <span class="title-section">Cabañas</span>
        </div>
    </section>

    <section>
        <div id="carouselExample" class="carousel slide full-container-max">
            <div id="carousel-inner" class="carousel-inner">
                @foreach ($rooms as $room)
                <div @if ($loop->first)
                    class="my-carousel-item carousel-item active"
                    @else
                    class="my-carousel-item carousel-item"
                    @endif
                    >
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{Voyager::image($room->thumbnail('medium'))}}" class="card-img-top" alt="{{$room->title}}">
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
                                <a href="https://wa.me/{{setting('contacto.whatsapp')}}" class="btn">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button id="carousel-control-prev" class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
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
                <a href="{{ route('room.public.index') }}" class="btn btn-outline-aguysal">Ver más Habitaciones</a>
            </div>
        </div>
    </section>
    <br>

    {{-- PACKAGE --}}
    <section aria-label="Paquetes Especiales">
        <div id="carouselPackage" class="carousel slide header-package px-lg-5 full-container-max">
            <h2 style="text-align: center;">Paquetes Especiales</h2>
            <div id="carousel-inner1" class="carousel-inner">
                @foreach ($specialPackages as $package)
                <div @if ($loop->first)
                    class="my-carousel-item carousel-item active"
                    @else
                    class="my-carousel-item carousel-item"
                    @endif
                    >
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{Voyager::image($package->thumbnail('medium'))}}" class="card-img-top" alt="{{ $package->title }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title h4 text-center">{{ $package->title }}</h5>
                            <div class="card-btns">
                                <a href="{{route('specialpackage.public.show', $package->id)}}" class="btn">Ver
                                    Detalles</a>
                                <a href="https://wa.me/{{setting('contacto.whatsapp')}}" class="btn">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button id="carousel-control-prev1" class="carousel-control-prev" type="button" data-bs-target="#carouselPackage" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button id="carousel-control-next1" class="carousel-control-next" type="button"
                data-bs-target="#carouselPackage" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- <div class="container">
            <div class="text-center my-5">
                <a href="#" class="btn btn-outline-aguysal">Ver más Paquetes</a>
            </div>
        </div> --}}
    </section>
    

    @if ($visitors->isNotEmpty())
        <section style="">
            <div class="container full-container-max my-5">
                <div class="row">
                    <h2 class="pt-5 pb-3 text-center" style="font-size: 60px">Nuestros visitantes</h2>
                </div>
                <div class="row">
                    @foreach ( $visitors as $item )
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>{{$item->thumbnail('medium')}}</p>
                        <a href="{{route('get.gallery',$item->id)}}">
                            <img src="{{Voyager::image($item->thumbnail('medium','featured_image'))}}" alt="{{$item->title}}" style="width: 100%; height: 350px; object-fit: cover; border-radius:18px">
                        </a>
                        <h4 class="text-center my-3">{{$item->title}}</h4>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($galleries->isNotEmpty())
        <section style="">
            <div class="container full-container-max my-5">
                <div class="row">
                    <h2 class="pt-5 pb-3 text-center" style="font-size: 60px">Lugares Turisticos</h2>
                </div>
                <div class="row">
                    @foreach ( $galleries as $gallery )
                    <div class="col-12 col-md-6 col-lg-4">
                        <p>{{$gallery->thumbnail('medium')}}</p>
                        <a href="{{route('get.gallery',$gallery->id)}}">
                            <img src="{{Voyager::image($gallery->thumbnail('medium','featured_image'))}}" alt="{{$gallery->title}}" style="width: 100%; height: 350px; object-fit: cover; border-radius:18px">
                        </a>
                        <h4 class="text-center my-3">{{$gallery->title}}</h4>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <section class="m-5">
        <div class="full-container-max flex">
            <h2>¿DONDE SE ENCUENTRA EL ECO ALBERGUE  “AGUAYSAL”?</h2>
            <p>
                Ubicado a 31 km de Santa Rosa del Yacuma, Beni, Bolivia, dentro del Área Protegida Municipal Pampas del Yacuma que alberga especies endémicas y diversidad de fauna silvestre.
            </p>
            <p>
                El eco albergue está compuesto de 8 cabañas turísticas totalmente equipadas, con baño privado, televisores de plasma, aires acondicionados, un área administrativa, un centro de interpretación, área de restauración que también funciona como centro de reuniones, boulevard interior, 3 churrasqueras. Tiene una capacidad instalada para 24 visitantes.
            </p>
            <h3>TIPO DE TURISMO A REALIZAR COMO ECO ALBERGUE TURISTICO AGUAYSAL</h3>
            <ul>
                <li>Avi turismo: (nicho de mercado del eco turismo) avistamiento de aves en su entorno natural.</li>
                <li>Turismo de estancias: es la actividad turística que se realiza en un espacio rural o natural. Entre sus actividades se incluyen: contacto con la naturaleza, ambrosía al amanecer, paseos a caballo, pesca deportiva, y disfrutar de los increíbles paisajes en los alrededores de las estancias.</li>
                <li>Turismo comunitario: es aquella forma de turismo que busca sumergirse en la cultura, tradición y estilo de vida de las comunidades locales. Es una experiencia turística que se basa, por tanto, en vivir experiencias inmersivas para comprender en profundidad la forma de vida de los habitantes locales.</li>
                <li>Turismo de convenciones: es aquel que atrae las visitas de un número significativo de turistas que viaja por motivos de negocios, congresos académicos, conferencias y otras reuniones, organizadas en diferentes hoteles o centros de convenciones</li>
            </ul>
        </div>
    </section>
    
</main>
@endsection
