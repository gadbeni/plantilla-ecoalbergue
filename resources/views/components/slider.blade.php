<!-- main-slider-start -->
<section class="main-slider-two" id="home">
    <div class="main-slider-two__shape-one" style="background-image: url(assets/images/shapes/slider-2-shape-1.png);">
    </div>
    <div class="main-slider-two__shape-two" style="background-image: url(assets/images/shapes/slider-2-shape-2.png);">
    </div>
    <div class="main-slider-two__carousel trevlo-owl__carousel owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 0,
    "loop": true,
    "smartSpeed": 700,
    "animateOut": "fadeOut",
    "autoplayTimeout": 5000,
    "nav": false,
    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
    "dots": false,
    "autoplay": true
    }'>
        <div class="item">
            <div class="main-slider-two__image"
                style="background-image: url({{Voyager::image(setting('site.main_img'))}})"></div>
            <div class="container">
                <div class="main-slider-two__content">
                    <div class="main-slider-two__text-one">{{setting('site.title')}}</div>
                    <div class="main-slider-two__text-two">Visitanos</div>
                    <h5 class="main-slider-two__sub-title">{{setting('site.subtitle')}}</h5>
                    <h3 class="main-slider-two__title" style="max-width: 450px">{{setting('site.description')}}</h3>
                    <div class="main-slider-two__btn">
                        <a href="contact.html" class="trevlo-btn trevlo-btn--base"><span>Start
                                Booking</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main-slider-end -->
