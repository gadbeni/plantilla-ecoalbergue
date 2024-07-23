@extends('frontend.index')
<br>
<br>
<br>
<br>
<br>

<style>
    .header-room {
        background-image: url('assets/img/textura.jpg');
        height: 4%;
        width: 96%;
        background-size: cover;
        background-position: center;
        color: white;
        padding: 4rem;
        /* margin-top: 10rem; */

        /* margin-bottom: 19rem; */
    }

    .room {
        display: block;
        margin: 0 auto;
        width: 46%;
        right: 10%;
        position: relative;
        top: -300px;
        border-radius: 10px;
    }

    .bg-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #007bff;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }

    @media (max-width: 768px) {
        .room {
            width: 100%;
            right: 2rem;
            top: 10px;
            /* Ocupa el 90% del ancho en dispositivos medianos */
        }
    }

    @media (max-width: 576px) {
        .room {
            width: 100%;
            right: 2rem;
            top: 10px;
            /* Ocupa el 100% del ancho en dispositivos pequeños */
        }
    }
</style>
<section>
    <div class="text-center">
        <h2>Habitaciones</h2>
        <h3>Club exclusivo</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, possimus itaque. Temporibus esse dolorum
            consequuntur. i.</p>
    </div>
    <div class="header-room  full-container-max" style="background-image: url('assets/img/textura.jpg');">

        <div class="text-center">
            <a href="#" class="btn btn-primary mx-auto">Ver todos los salones</a>
        </div>
        <div class="room card text-bg-dark">
            <img src="assets/img/palmeras_naranja.webp" class="card-img" alt="Imagen del evento social y corporativo">
        </div>
    </div>
    <div class="text-center py-4">
        <div class="d-flex justify-content-center">
            <div class="d-inline-flex mr-4">
                <div class="bg-white border border-dark rounded-circle p-4">
                    <i class="fa fa-user text-dark"></i>
                </div>
                <span class="block">Habitaciones</span>
                <span class="block">2 personas</span>
            </div>
            <div class="d-inline-flex mr-4">
                <div class="bg-white border border-dark rounded-circle p-4">
                    <i class="fa fa-user text-dark"></i>
                </div>
                <span class="block">Habitaciones</span>
                <span class="block">2 personas</span>
            </div>
            <div class="d-inline-flex">
                <div class="bg-white border border-dark rounded-circle p-4">
                    <i class="fa fa-user text-dark"></i>
                </div>
                <span class="block">Habitaciones</span>
                <span class="block">2 personas</span>
            </div>
        </div>
    </div>
</section>
<style>
    .header-room1 {
        height: 10%;
        width: 96%;
        background-size: cover;
        background-position: center;
        color: white;
        padding: 9rem;
        margin-top: 10rem;
        display: block;
        margin-bottom: 10rem;
    }

    .he {
        display: block;
        margin-top: 120px;
    }
</style>

<section class="py-5 he">
    <div class="header-room1  full-container-max" style="background-image: url('assets/img/textura.jpg');">

        <div class="text-center">
            <h2>CARACTERISTICAS</h2>
            <div class="d-flex justify-content-center">
                <div class="d-inline-flex mr-4" style="margin-left: 40px;">
                    <div class="d-flex flex-column">
                        <div class="bg-white border border-dark rounded-circle p-4" style="border-radius: 50%;">
                            <i class="fa fa-user text-dark"></i>
                        </div>
                        <span class="block">Habitaciones</span>
                    </div>
                </div>
                <div class="d-inline-flex mr-4" style="margin-left: 40px;">
                    <div class="d-flex flex-column">
                        <div class="bg-white border border-dark rounded-circle p-4" style="border-radius: 50%;">
                            <i class="fa fa-user text-dark"></i>
                        </div>
                        <span class="block">Habitaciones</span>
                    </div>
                </div>
                <div class="d-inline-flex" style="margin-left: 40px;">
                    <div class="d-flex flex-column">
                        <div class="bg-white border border-dark rounded-circle p-4" style="border-radius: 50%;">
                            <i class="fa fa-user text-dark"></i>
                        </div>
                        <span class="block">Habitaciones</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <span class="pre-title-section">Galeria</span>
    <span class="title-section">Club</span>
</div>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    h2 {
        text-align: center;
        font-size: 35px;
        margin-top: 50px;
        text-transform: uppercase;
    }

    .container2 {
        width: 100%;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 8%;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 30px;
    }

    .gallery img {
        width: 100%;
    }
</style>
<section>
    <div class="container2">
        <div class="gallery">
            <a href="assets/images/1.jpg" data-lightbox="models" data-title="imagen1">
                <img src="assets/images/1.jpg" alt="">
            </a>
            <a href="assets/images/1.jpg" data-lightbox="models" data-title="imagen1">
                <img src="assets/images/1.jpg" alt="">
            </a>
            <a href="assets/images/1.jpg" data-lightbox="models" data-title="imagen1">
                <img src="assets/images/1.jpg" alt="">
            </a>
            <a href="assets/images/1.jpg" data-lightbox="models" data-title="imagen1">
                <img src="assets/images/1.jpg" alt="">
            </a>
        </div>
    </div>
</section>

<section id="carousel-section">
    <div class="container">
        <span class="pre-title-section">Sea nuestro</span>
        <span class="title-section">Huésped</span>
    </div>
</section>



<br>

<br>




{{-- <br>
<br>
<br>
<br>
<br>
<br>
<br>
@section('content')
<main>
    <style>
        .img-textura {
            background-image: url('assets/img/textura.jpg');
            margin-left: 0;
            height: 100vh;
            width: 40vw;
            background-position: center;
            color: white;
            padding: 4rem;
        }

        .imge {
            width: 30vw;
            height: 75vh;
            margin-left: 170;
            margin-bottom: 20rem;
        }

        .text {
            margin: 200px 0px;
        }
    </style>

    <section aria-label="Paquetes Especiales">
        <div class="container-fluid">
            <div class="row">
                <div class="img-textura full-container-max col-6"
                    style="background-image: url('assets/img/textura.jpg');">
                    <figure class="">
                        <img src="{{asset('assets/img/a.webp')}}" class="imge" alt="..."
                            aria-label="Imagen del paquete especial">
                    </figure>
                </div>
                <div class="text col-6">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident rerum sequi deserunt
                        molestias tenetur cum eos aliquam voluptas accusamus, hic ipsa ratione porro nihil corrupti
                        neque cupiditate ad itaque dicta.</p>
                </div>
            </div>
        </div>
    </section>
    <style>
        .nosotros {
            text-align: center;
            line-height: 2em;
        }

        .ima {
            width: 45vw;
            height: 35vw;
        }
    </style>
    <section class="nosotros my-5">
        <h2></h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('assets/img/img1.webp') }}" alt="Los Tajibos Hotel" class="img-fluid ima">
                </div>
                <div class="text col-12 col-lg-6">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident rerum sequi deserunt
                        molestias tenetur cum eos aliquam voluptas accusamus, hic ipsa ratione porro nihil corrupti
                        neque cupiditate ad itaque dicta.</p>
                </div>

            </div>
        </div>
    </section>


    <section class="nosotros my-5">
        <h2></h2>
        <div class="container-fluid">
            <div class="row">
                <div class="text col-12 col-lg-6">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident rerum sequi deserunt
                        molestias tenetur cum eos aliquam voluptas accusamus, hic ipsa ratione porro nihil corrupti
                        neque cupiditate ad itaque dicta.</p>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('assets/img/img1.webp') }}" alt="Los Tajibos Hotel" class="img-fluid ima">
                </div>

            </div>
        </div>
    </section>

    <section class="nosotros my-5">
        <h2></h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('assets/img/img1.webp') }}" alt="Los Tajibos Hotel" class="img-fluid ima">
                </div>
                <div class="text col-12 col-lg-6">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident rerum sequi deserunt
                        molestias tenetur cum eos aliquam voluptas accusamus, hic ipsa ratione porro nihil corrupti
                        neque cupiditate ad itaque dicta.</p>
                </div>
            </div>
        </div>
    </section> --}}





    {{-- <section class="container-fluid full-container-max">

        <div class="row">
            <div class="col-lg-6 hero-image">
                <img src="{{ asset('assets/img/img1.webp') }}" alt="Los Tajibos Hotel" class="img-fluid">
            </div>

            <div class="col-lg-6 hero-content">
                <h2>Disfrute de sus beneficios</h2>
                <p>Reserve ahora y obtenga acceso exclusivo a ofertas especiales. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Iure ad amet officia consequuntur eligendi pariatur praesentium nam, voluptate
                    error quas illo explicabo tempore atque delectus quo ab exercitationem dolor velit.</p>

                <a href="#" class="btn btn-primary">Reserve ahora</a>
            </div>
        </div>
    </section> --}}
    {{--
</main>

@endsection --}}













{{--@section('content')
<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title wow animated fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms">
            {{$page->title}}</h2>
        <div class="page-header__breadcrumb-box">
            <ul class="trevlo-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>{{$page->title}}</li>
            </ul><!-- /.trevlo-breadcrumb -->
        </div><!-- /.page-header__breadcrumb-box -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<!-- Destination Details Page Start -->
<section class="destination-details section-space">
    <div class="container">
        <div class="destination-details__row row">
            <div class="col-xl-8 col-lg-7">
                <div class="destination-details__card">
                    <div class="destination-details__card-img wow animated fadeInUp" data-wow-delay="0.1s"
                        data-wow-duration="1500ms">
                        <h3 class="destination-details__card-title destination-details__title">{{$page->title}}</h3>
                        <img src="{{Voyager::image($page->image)}}" alt="{{$page->title}}">
                    </div><!-- /.destination-details__card-img -->
                    <div class="destination-details__card-content">
                        <p class="destination-details__card-text wow animated fadeInUp" data-wow-delay="0.1s"
                            data-wow-duration="1500ms">{!! $page->body !!}</p>
                    </div><!-- /.destination-details__card-content -->
                </div><!-- /.destination-details__card -->


            </div><!-- /.col-xl-8 col-lg-7 -->
        </div><!-- /.row -->
    </div>
</section>
<!-- Destination Details Page End -->

@endsection --}}
