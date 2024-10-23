@extends('frontend.index')

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
    {{-- <style>
        #counter {
            font-size: 36px;
            font-weight: bold;
            margin-top: 50px;
            text-align: center;
        }
    </style>
    <div id="counter">
        <h2>Contador de Visitas</h2>
        {{ $count['visitas'] }}
    </div> --}}

    <section id="second-section">
        <div class="full-container-max flex">
            <div class="left">
                <h2></h2>
                <div>
                    <h4>{{ $page->title }}</h4>
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
                    class="carousel-item active"
                    @else
                    class="carousel-item"
                    @endif
                    >
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{Voyager::image($room->thumbnail('medium'))}}" class="card-img-top" alt="...">
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
                                <a href="https://wa.me/59171124428" class="btn">Reservar</a>
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
                    class="carousel-item active"
                    @else
                    class="carousel-item"
                    @endif
                    >
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{Voyager::image($package->thumbnail('medium'))}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title h4 text-center">{{ $package->title }}</h5>
                            <div class="card-btns">
                                <a href="{{route('specialpackage.public.show', $package->id)}}" class="btn">Ver
                                    Detalles</a>
                                <a href="https://wa.me/59171124428" class="btn">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button id="#carousel-control-prev1" class="carousel-control-prev" type="button" data-bs-target="#carouselPackage" data-bs-slide="prev">
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

    {{-- POST --}}
    <div class="container1  full-container-max">
        <div class="slider1">
            @foreach ($posts as $post)
            <div class="slides">
                <img src="{{Voyager::image($post->thumbnail('medium'))}}" class="slides" alt="{{ $post->title }}">
                <div class="content1">
                    <div class="name">{{ $post->title }}</div>
                    {{-- <div class="des">{{ $post->excerpt }} </div> --}}
                    <a href="{{ route('post.show', $post->slug) }}" type="button" class="btn btn-outline-success">ver mas</a>
                    {{-- <a href="{{ route('post.show', $post->slug) }}">ver mas</a> --}}
                </div>
            </div>
            @endforeach
        </div>
        <div class="buttons">
            {{-- <span class="prev1"></span> --}}
            <span class="next1"><i class="bi bi-arrow-right-short fs-2x display-6 text-white"></i></span>
        </div>

    </div>
    <div class="container">
        <div class="text-center my-5">
            <a href="{{ route('post.index') }}" class="btn btn-outline-aguysal">Ver más blog</a>
        </div>
    </div>
</main>
@endsection
