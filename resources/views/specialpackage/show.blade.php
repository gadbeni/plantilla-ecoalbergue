@extends('frontend.index')
@section('content')
<section class="section-top" style="position: relative; margin-bottom: 200px; min-height: 800px">
    <div class="container" >
        <div class="row mb-5 d-none d-lg-block">
            <div class="col ">
                <div class="miga-pan">
                    <span><a href="/">Inicio</a> ></span>
                    <span>Paquetes Especiales ></span>
                    <span>
                        <strong>
                            {{ $specialpackage->title }}
                        </strong>
                    </span>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: white">

            <div class="col-lg-6 mt-3 order-lg-2" >
                <div class="ms-lg-5 details-text">
                    <h5>Paquete Especial</h5>
                    <h3>{{ $specialpackage->title }}</h3>
                    <p>{!! $specialpackage->description !!}</p>
                </div>
            </div>
            <div class="col-lg-6" style="position: relative;">
                <img src="{{ asset('storage/'.$specialpackage->image) }}" alt="" class="img-fluid img-float"

                >
            </div>
        </div>
    </div>
    <div class="skin_banner" style="background-image: url({{url('/assets/img/textura_alrga_verde.webp')}})">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-6 ">
                    <div class="d-flex justify-content-center justify-content-lg-end py-5">
                        <a href="" class="btn btn-light">RESERVAR AHORA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
