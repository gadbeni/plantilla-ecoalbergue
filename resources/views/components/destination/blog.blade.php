<!-- blog-one Start -->
<div class="blog-one blog-one--home-two" id="blog">
    <div class="container">
        <div class="sec-title text-center">

            <p class="sec-title__tagline" style="font-size:24px">ARTÍCULOS Y NOTICIAS</p><!-- /.sec-title__tagline -->

            <h2 class="sec-title__title">Últimas noticias y artículos de<br> las publicaciones del blog</h2>
            <!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="blog-page__carousel trevlo-owl__carousel trevlo-owl__carousel--basic-nav owl-theme owl-carousel"
            data-owl-options='{
        "items": 5,
        "margin": 30,
        "smartSpeed": 700,
        "loop":false,
        "autoplay": 6000,
        "nav":false,
        "dots":true,
        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
        "responsive":{
            "0":{
                "items": 1
            },
            "768":{
                "items": 2
            },
            "1200":{
                "items": 3
            }
        }
        }'>
            {{-- para mostrar el mes en letra (Español) --}}
            @php
                $meses = [
                    1 => 'Ene',
                    2 => 'Feb',
                    3 => 'Mar',
                    4 => 'Abr',
                    5 => 'May',
                    6 => 'Jun',
                    7 => 'Jul',
                    8 => 'Ago',
                    9 => 'Sep',
                    10 => 'Oct',
                    11 => 'Nov',
                    12 => 'Dic',
                ];
            @endphp
            @foreach ( $posts as $post )

                <div class="item">
                    <div class="blog-card">
                        <a href="{{ route('post.show', $post->slug) }}" class="blog-card__image-link">
                            <img height="450px" src="{{Voyager::image($post->image)}}" alt="You Should See Things when visiting Japan"
                                class="blog-card__image">
                            <div class="blog-card__overlay">
                                <span class="blog-card__plus icon-plus"></span>
                            </div><!-- /.blog-card__overlay -->
                        </a><!-- /.blog-card__image-link -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">
                                <h4 class="blog-card__date-number">{{ $post->created_at->format('d') }}</h4>
                                <h4 class="blog-card__date-month">{{ $post->created_at ? $meses[$post->created_at->format('n')] : '' }}</h4>
                            </div><!-- /.blog-card__date -->
                            {{-- <ul class="blog-card__meta">
                                <li>
                                    <span class="blog-card__meta-icon icon-user"></span>
                                    <span class="blog-card__meta-author">By Admin</span>
                                </li>
                                <li>
                                    <span class="blog-card__meta-icon icon-chat"></span>
                                    <span class="blog-card__meta-author">2 Comment</span>
                                </li>
                            </ul> --}}
                            <!-- /.blog-card__meta -->
                            <h3 class="blog-card__title">
                                <a href="{{ route('post.show', $post->slug) }}">
                                    {{$post->title}}
                                </a>
                            </h3><!-- /.blog-card__title -->
                            <a href="{{ route('post.show', $post->slug) }}" class="blog-card__link">
                                Leer más
                                <i class="fas fa-arrow-right"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-xl-4 -->
            @endforeach


        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog-one -->
<!-- blog-one End -->
