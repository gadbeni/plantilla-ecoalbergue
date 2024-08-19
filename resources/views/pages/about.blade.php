@extends('frontend.index2')

@section('content')
<br>
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
