<!DOCTYPE html>
<html lang="es">
<head>
    @include('frontend.partials.head')
</head>

<body>
    <header>
        @include('frontend.navigation.header2')
    </header>
    @yield('content')

    {{-- BOTON REDES SOCIALES --}}
    @include('frontend.partials.button')

    <!-- Footer -->
    <@include('frontend.partials.footer')
    <!-- Footer -->


    @include('frontend.partials.scripts')

</body>

</html>

