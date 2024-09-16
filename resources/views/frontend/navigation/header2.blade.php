<div class="container">
    <div class="header-scroll navbar">
        @include('frontend.navigation.scroll.navbar')
    </div>
</div>
<div id="menu" class="content-menu">
    {{menu('main', 'frontend.navigation.scroll.menu')}}
</div>
<script src="{{ asset('assets/js/scriptpage.js') }}"></script>
