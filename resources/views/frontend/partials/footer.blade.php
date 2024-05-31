<footer class="main-footer @@extraClassName">
    {{-- <div class="main-footer__bg" style="background-image: url(assets/images/backgrounds/footer-bg.png);"></div>
    --}}
    <!-- /.main-footer__bg -->
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-sm-5">
                <div class="main-footer__logo-box">
                    <img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo-dark" class="main-footer__logo">
                </div><!-- /.main-footer__logo-box -->
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xl-2 wow animated fadeInUp" data-wow-delay="0.1s"
                data-wow-duration="1500ms">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Institución</h2><!-- /.footer-widget__title -->
                    <ul class="footer-widget__links">
                        <li><a href="destinations.html">Destino</a></li>
                        <li><a href="{{ route('about') }}">Sobre Nosotros</a></li>
                        {{-- <li><a href="blog.html">Community Blog</a></li>
                        <li><a href="our-guide.html">Meet the Guide</a></li>
                        <li><a href="contact.html">Contact Now</a></li> --}}
                    </ul><!-- /.footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-xl-2 wow animated fadeInUp" data-wow-delay="0.3s"
                data-wow-duration="1500ms">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Explorar</h2><!-- /.footer-widget__title -->
                    <ul class="footer-widget__links">
                        <li><a href="tour-listing-1.html">Listados de Tours</a></li>
                        {{-- <li><a href="login.html">Account</a></li>
                        <li><a href="contact.html">Privacy Policy</a></li>
                        <li><a href="faq.html">Help</a></li> --}}
                    </ul><!-- /.footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-lg-6 col-md-4 col-xl-4 wow animated fadeInUp" data-wow-delay="0.5s"
                data-wow-duration="1500ms">
                <div class="footer-widget footer-widget--contact">
                    <h2 class="footer-widget__title">Contacto</h2><!-- /.footer-widget__title -->
                    <ul class="footer-widget__info">
                        <li> <span class="icon-phone-1"></span> <a
                                href="tel:{{setting('contacto.phone')}}">Telefono{{setting('contacto.phone')}}</a>  
                        </li>
                        <li> <span class="icon-envelope"></span> <a
                                href="mailto:{{setting('contacto.email')}}">Email{{setting('contacto.email')}}</a></li>
                        <li> <span class="icon-phone-1"></span><a href="https://wa.me/59171124428"target="_blank">WhatsApp: (591) 71124428</a> 
                        </li>
                        <li> <span class="icon-phone-1"></span><a href="https://www.facebook.com/Aguaysalecoalbergue" target="_blank">Agua y sal ecoalbergue</a></a> </li> <br>
                        
                    </ul><!-- /.footer-widget__info -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom-inner">
                <p class="main-footer__copyright">
                    &copy; Copyright GADBENI <span class="dynamic-year"></span>. Todos los derechos reservados
                </p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->