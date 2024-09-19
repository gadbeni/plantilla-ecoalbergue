<!DOCTYPE html>
<html lang="es">
<head>
    @include('frontend.partials.head')
    <title> Eco Albergue Turístico | AGUAYSAL</title>
    <meta name="description"
    content="Escapate a un paraíso tropical de relajación y rejuvenecimiento. Descubre joyas escondidas de bienestar en nuestras selvas y maravillas." />

</head>

<body>
    <header>
        @section('header')
            @include('frontend.navigation.header', ['menu' => 'main', 'className' => 'header-scroll'])
        @show
    </header>

    @yield('content')

    <!-- Footer -->
    @include('frontend.partials.footer')
    <!-- Footer -->

    {{-- BOTON REDES SOCIALES --}}
    @include('frontend.partials.button')

    @include('frontend.partials.scripts')

</body>

</html>

