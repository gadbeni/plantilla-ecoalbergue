@extends('frontend.index')
@section('content')
<section class="section-top" style="position: relative; margin-bottom: 200px; min-height: 0px">
    <div class="container" >
        <div class="row mb-5 d-none d-lg-block">
            <div class="col ">
                <div class="miga-pan">
                    <span><a href="{{ route('home') }}">Inicio</a> ></span>
                    <span><a href="{{ route('room.public.index') }}">Habitaciones</a> ></span>
                    <span>
                        <strong>
                            {{ $room->title }}
                        </strong>
                    </span>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: white">

            <div class="col-lg-6 mt-3 order-lg-2" >
                <div class="ms-lg-5 details-text">
                    <h5>Habitación</h5>
                    <h3>{{ $room->title }}</h3>
                    <p>{!! $room->description !!}</p>
                </div>
            </div>
            <div class="col-lg-6" style="position: relative;">
                <img src="{{ asset('storage/'.$room->image) }}" alt="" class="img-fluid img-float"

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
    <div class="container">
        <div class="row">
            <div class="col offset-lg-6 ">
                <div class="icons-color-container flex-column gap-2 align-items-center flex-md-row">
                    <div class="icon-item d-flex gap-2">
                        <i class="fa-solid fa-user"></i>
                        <div class="d-flex flex-column">
                            <strong><span>Capacidad</span></strong>
                            <span>
                                {{$room->capacity}}
                                @if ($room->capacity > 1)
                                Personas
                                @else
                                Persona
                                @endif
                            </span>
                        </div>
                    </div>

                    <div class="icon-item d-flex gap-2">
                        <i class="fa-solid fa-bed"></i>
                        <div class="d-flex flex-column">
                            <strong><span>Tipo de Cama</span></strong>
                            <span>{{$room->bed_type}} </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
