@extends('frontend.index2')
@section('content')
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
<section style="margin-top: 180px">
    <div class="text-center" >
        <h1>{{$room->title }}</h1>
        <p>{!!$room->description!!}</p>
    </div>
    <div class="header-room  full-container-max" style="background-image: url({{url('img/textura_alrga_naranja.png')}})">

        <div class="text-center">
            <a href="#" class="btn btn-primary mx-auto">Ver todos los salones</a>
        </div>
        <div class="room card text-bg-dark">
            <img src="{{url('assets/img/img1.webp')}}" class="card-img" alt="Imagen del evento social y corporativo">
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
@endsection