<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials.head')
    <meta name="description"
    content="Escape to a tropical paradise of relaxation and rejuvenation. Discover hidden wellness gems in our jungles and wonders." />

    <title> Eco Tourist Lodge | AGUAYSAL</title>
</head>

<body>
    <header>
        {{-- @include('frontend.navigation.header') --}}
    </header>

    @yield('content')

    <!-- Footer -->
    {{-- @include('frontend.partials.footer') --}}
    <!-- Footer -->

    {{-- BOTON REDES SOCIALES --}}
    {{-- @include('frontend.partials.button') --}}

    @include('frontend.partials.scripts')

</body>

</html>

