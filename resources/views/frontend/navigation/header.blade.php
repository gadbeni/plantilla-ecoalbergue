<div class="container">
    <div class="{{$className}} navbar">
        @include('frontend.navigation.scroll.navbar')
    </div>
</div>
<div id="menu" class="content-menu">
    {{-- @include('frontend.navigation.scroll.menu') --}}
    {{menu($menu, 'frontend.navigation.scroll.menu')}}
</div>
@if ($className == 'header-scroll')
    <script src="{{ asset('assets/js/scriptpage.js') }}"></script>  
@endif