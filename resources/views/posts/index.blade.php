@extends('frontend.index')
<br>
<br>
<br>
<br>
<br>
<br>
@section('content')
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

@endsection
{{--
@section('content')
    @include('posts.components.content')


    <div class="blog-page section-space">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    @component('posts.components.blog-card', ['post' => $post])

                    @endcomponent
                @endforeach
            </div><!-- /.row -->
            @component('posts.components.post-pagination', ['posts' => $posts])
            @endcomponent
        </div><!-- /.container -->
    </div><!-- /.blog-page -->
    <!-- Blog Page End -->

@endsection --}}

