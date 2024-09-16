<hr>
    <nav>
        <ul>
            @foreach ( $items as $item )
            <li><a href="{{ $item->link() }}">{{ $item->title }}</a></li>
            @endforeach

            {{-- <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('about') }}">Nosotros</a></li>
            <li><a href="{{ route('room.public.index') }}">Servicios</a></li>
            <li><a href="https://wa.me/59171124428">Contacto</a></li> --}}
        </ul>
    </nav>
    {{-- <hr>
    <ul>
        <li><a href="https://wa.me/59171124428">Contact us</a></li>
        <li><a href="{{ route('home') }}">Art Gallery</a></li>
        <li><a href="{{ route('about') }}">Abouts Us</a></li>
    </ul> --}}
    <div class="content-language">
        <div>
            <a href="{{ route('home') }}">Español</a>
        </div>
        <div>
            <a href="{{ route('en.home') }}">English</a>
        </div>
    </div>

    {{-- <nav class="main-header__nav main-menu">
        <ul class="main-menu__list one-page-scroll-menu">
            @foreach ( $items as $item )
                @if (!$item->children->isEmpty())
                    <li class="dropdown">
                        <a href="#">{{ $item->title }}</a>
                        <ul class="sub-menu">
                            @foreach ($item->children as $child)
                                <li>
                                    <a href="{{ $child->link() }}">{{ $child->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <x-navlink href="{{ $item->link() }}" :active="request()->routeIs($item->route)">
                        {{ $item->title }}
                    </x-navlink>
                @endif
            @endforeach
        </ul>
    </nav> --}}
