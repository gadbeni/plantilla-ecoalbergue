@extends('frontend.index')
@section('content')
    <main style="margin-top: 180px">
        <section>
            <div class="container full-container-max">
                <div class="row">
                    <div class="col">
                        <h1>{{$gallery->title}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3 order-1 mb-5 mb-md-0">
                        <a href="{{route('home')}}" class="btn btn-outline-secondary">Volver al Inicio</a>
                        <div class="mt-4">
                            {!! $gallery->description !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-9 order-0 order-md-1">
                        @if ($gallery->images)
                            <div id="carousel" class="carousel slide">
                            <div class="carousel-inner">
                            @foreach ( $images as $img )
                                <div class="carousel-item @if($loop->iteration==1) active @endif">
                                    {{-- <img src="{{Voyager::image($gallery->getThumbnail($img,'medium'))}}" class="d-block w-100 img-gallery" alt="imagen" > --}}
                                    <img src="{{Voyager::image($img)}}" class="d-block w-100 img-gallery" alt="imagen" >
                                    
                                </div>
                            @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        @else
                            <div style="margin: 150px 0">
                                <p>No hay imagenes para mostrar.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection