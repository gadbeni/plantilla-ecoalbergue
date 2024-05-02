<header class="main-header sticky-header sticky-header--one-page">
    <div class="container">
        <div class="main-header__inner">
            <div class="main-header__left">
                <div class="main-header__logo">
                    <a href="index.html">
                        <img src="{{ Voyager::image(setting('site.logo')) }}" alt="Logo" width="146">
                    </a>
                </div><!-- /.main-header__logo -->
                {{menu('main', 'frontend.partials.menu')}}
                <!-- /.main-header__nav -->
            </div><!-- /.main-header__left -->

            <div class="main-header__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                {{-- <a href="tour-listing-side-filter-right.html"
                    class="main-header__booking-btn trevlo-btn trevlo-btn--white-two">
                    <span>Start
                        Booking</span>
                </a> --}}
                    <!-- /.main-header__btn -->
                <div class="main-header__right-right">
                    <div class="main-header__phone">
                        <div class="main-header__phone-icon">
                            <span class="icon-phone-1"></span>
                        </div>
                        <div class="main-header__phone-text">
                            <p class="main-header__phone-title">Contáctanos ya</p>
                            <h4 class="main-header__phone-number"><a href="tel:{{ setting('contacto.phone') }}">{{setting('contacto.phone')}}</a>
                            </h4>
                        </div>
                    </div><!-- /.main-header__phone -->
                    <div class="main-header__divider"></div>
                    <ul class="main-header__search-user">
                        {{-- <li class="main-header__search-user-item">
                            <a href="#" class="main-header__search search-toggler">
                                <span class="icon-search"></span>
                            </a>
                        </li> --}}
                        <li class="main-header__search-user-item">
                            <a href="{{route('login')}}" class="main-header__user">
                                <span class="icon-user-1"></span>
                            </a>
                        </li>
                    </ul><!-- /.main-header__search-user -->
                </div><!-- /.main-header__right-right -->
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header -->
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{ Voyager::image(setting('site.logo')) }}" width="155"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{setting('contacto.email')}}">{{setting('contacto.email')}}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{ setting('contacto.phone') }}">{{ setting('contacto.phone') }}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            <a href="https://twitter.com/">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://facebook.com/">
                <i class="fab fa-facebook" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://pinterest.com/">
                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                <span class="sr-only">Pinterest</span>
            </a>
            <a href="https://instagram.com/">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>