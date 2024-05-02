<nav class="main-header__nav main-menu">
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
</nav>