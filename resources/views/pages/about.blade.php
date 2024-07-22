@extends('frontend.index')
<br>
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
                <div class="img-textura full-container-max col-6" style="background-image: url('assets/img/textura.jpg');">
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
        .ima{
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
    </section>




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

</main>

@endsection


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
