@extends('frontend.index2')

@section('content')
    <section class="section-top" style="position: relative; margin-bottom: 70px; ">
        <div class="container" >
            <div class="row mb-5 d-none d-lg-block">
                <div class="col ">
                    <div class="miga-pan">
                        <span><a href="{{ route('home') }}">Inicio</a> ></span>
                        <span>sobre nosotros </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Destination Details Page Start -->
    <section class="destination-details section-space">
        <div class="container">
            <div class="destination-details__row row">
                <div class="col-xl-8 col-lg-7">
                    <div class="destination-details__card">
                        <div class="destination-details__card-img wow animated fadeInUp" data-wow-delay="0.1s"
                            data-wow-duration="1500ms">
                            <h3 class="destination-details__card-title destination-details__title">{{$page->title}}</h3>
                            @if ($page->image)
                                <img src="{{Voyager::image($page->image)}}" alt="{{$page->title}}">
                            @endif
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
@endsection
