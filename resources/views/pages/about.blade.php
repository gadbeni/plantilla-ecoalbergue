@extends('frontend.index')

@section('content')
<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title wow animated fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms">{{$page->title}}</h2>
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
                <div class="destination-details__overview">
                    <h3 class="destination-details__overview-title destination-details__title">Visión general</h3>
                    <ul class="destination-details__overview-content wow animated fadeInUp" data-wow-delay="0.1s"
                        data-wow-duration="1500ms">
                        <li>
                            <p>País</p>
                            <p>Bolivia</p>
                        </li>
                        <li>
                            <p>Idiomas hablados</p>
                            <p>Español</p>
                        </li>
                        <li>
                            <p>Moneda utilizada</p>
                            <p>Boliviano</p>
                        </li>

                    </ul><!-- /.destination-details__overview-content -->
                </div><!-- /.destination-details__overview -->
                <div class="destination-details__faq">
                    <div class="trevlo-accrodion destination-details__faq-box"
                        data-grp-name="destination-details__faq-box">


                        <div class="accrodion active wow animated fadeInUp" data-wow-delay="0.2s"
                            data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>Why are your Tours so Expensive?</h4>
                            </div>
                            <div class="accrodion-content" style="">
                                <div class="inner">
                                    <p>There are many variations of passages of available but majority have alteration
                                        in some by inject humour or random words. Lorem ipsum dolor sit amet, error
                                        insolens reprimique no quo, ea pri verterem phaedr vel ea iisque aliquam.</p>
                                    <ul class="accrodion-content-bottom">
                                        <li>Free Drinks</li>
                                        <li>Awesome Breakfast</li>
                                        <li>5 Star Accommodation</li>
                                    </ul><!-- /.accrodion-content__bottom -->
                                </div>
                            </div>
                        </div>

                        <div class="accrodion wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>Why are your Tours so Expensive?</h4>
                            </div>
                            <div class="accrodion-content" style="display: none;">
                                <div class="inner">
                                    <p>There are many variations of passages of available but majority have alteration
                                        in some by inject humour or random words. Lorem ipsum dolor sit amet, error
                                        insolens reprimique no quo, ea pri verterem phaedr vel ea iisque aliquam.</p>
                                    <ul class="accrodion-content-bottom">
                                        <li>Free Drinks</li>
                                        <li>Awesome Breakfast</li>
                                        <li>5 Star Accommodation</li>
                                    </ul><!-- /.accrodion-content__bottom -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-xl-8 col-lg-7 -->
        </div><!-- /.row -->
    </div>
</section>
<!-- Destination Details Page End -->

@endsection
