<!DOCTYPE html>
<html lang="es">
<head>
    @include('frontend.partials.head')
    <title> Eco Albergue Turístico | AGUAYSAL BENI BOLIVIA</title>
    @yield('meta')
    @yield('css')
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

    @yield('js')
</body>

</html>

