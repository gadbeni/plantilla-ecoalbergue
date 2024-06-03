<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{setting('site.title')}}</title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description"
        content="Escapate a un paraíso tropical de relajación y rejuvenecimiento. Descubre joyas escondidas de bienestar en nuestras selvas y maravillas." />

    <!--facebook open graph-->
    <meta property="og:title" content="Escapate a un paraíso tropical de relajación y rejuvenecimiento" />
    <meta property="og:description" content="Descubre joyas escondidas de bienestar en nuestras selvas y maravillas." />
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}" />


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,400;0,700;0,800;1,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&amp;display=swap" rel="stylesheet">

    @include('frontend.partials.style')
    @stack('css')
</head>

<body>
    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('frontend.partials.header')

        @yield('content')


        @include('frontend.partials.footer')

    </div><!-- /.page-wrapper -->


    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="search-popup__btn trevlo-btn trevlo-btn--base">
                    <span class="icon-search"></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a id="scroll-top" href="#" class="button-top">
        <i class="fa fa-arrow-up"></i>
    </a>

    @include('frontend.partials.script')
</body>


<!-- Mirrored from bracketweb.com/trevlo-html/index-2-one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 22:08:13 GMT -->

</html>
