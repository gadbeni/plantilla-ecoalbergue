<!DOCTYPE html>
<html lang="es">
<head>
    @include('frontend.partials.head')
</head>

<body>
    <header>
        @include('frontend.navigation.header')
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

