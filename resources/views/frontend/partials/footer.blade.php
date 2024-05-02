<footer class="main-footer @@extraClassName">
    <div class="main-footer__bg" style="background-image: url(assets/images/backgrounds/footer-bg.png);"></div>
    <!-- /.main-footer__bg -->
    <div class="container">
        <div class="main-footer__top row">
            <div class="col-lg-4 col-sm-5">
                <div class="main-footer__logo-box">
                    <img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo-dark" class="main-footer__logo">
                </div><!-- /.main-footer__logo-box -->
            </div>
            <div class="col-lg-8 col-sm-7">
                <ul class="main-footer__social">
                    <li class="main-footer__social-item">
                        <a href="https://facebook.com/" class="main-footer__social-link"><i
                                class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="main-footer__social-item">
                        <a href="https://linkedin.com/" class="main-footer__social-link"><i
                                class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li class="main-footer__social-item">
                        <a href="https://twitter.com/" class="main-footer__social-link"><i
                                class="fab fa-twitter"></i></a>
                    </li>
                    <li class="main-footer__social-item">
                        <a href="https://youtube.com/" class="main-footer__social-link"><i
                                class="fab fa-youtube"></i></a>
                    </li>
                </ul><!-- /.main-footer__logo-box -->
            </div>
            <div class="col-12">
                <div class="main-footer__line"></div><!-- /.main-footer__line -->
            </div><!-- /.col-12 -->
        </div><!-- /.main-footer__top -->
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xl-2 wow animated fadeInUp" data-wow-delay="0.1s"
                data-wow-duration="1500ms">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Company</h2><!-- /.footer-widget__title -->
                    <ul class="footer-widget__links">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="blog.html">Community Blog</a></li>
                        <li><a href="destinations.html">Destinations</a></li>
                        <li><a href="our-guide.html">Meet the Guide</a></li>
                        <li><a href="contact.html">Contact Now</a></li>
                    </ul><!-- /.footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-xl-2 wow animated fadeInUp" data-wow-delay="0.3s"
                data-wow-duration="1500ms">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                    <ul class="footer-widget__links">
                        <li><a href="login.html">Account</a></li>
                        <li><a href="tour-listing-1.html">Tour Listings</a></li>
                        <li><a href="contact.html">Privacy Policy</a></li>
                        <li><a href="faq.html">Help</a></li>
                    </ul><!-- /.footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            <div class="col-lg-6 col-md-4 col-xl-4 wow animated fadeInUp" data-wow-delay="0.5s"
                data-wow-duration="1500ms">
                <div class="footer-widget footer-widget--contact">
                    <h2 class="footer-widget__title">Contacto</h2><!-- /.footer-widget__title -->
                    <p class="footer-widget__address">6391 Elgin St. Celina, Delaware
                        New York. USA</p>
                    <ul class="footer-widget__info">
                        <li> <span class="icon-phone-1"></span> <a href="tel:{{setting('contacto.phone')}}">{{setting('contacto.phone')}}</a>
                        </li>
                        <li> <span class="icon-envelope"></span> <a
                                href="mailto:{{setting('contacto.email')}}">{{setting('contacto.email')}}</a></li>
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
