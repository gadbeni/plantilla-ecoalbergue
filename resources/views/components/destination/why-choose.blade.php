<style>
    <!-- CSS -->
    .thumbnail {
    width: 50%; /* tamaño de la imagen reducido */
    cursor: pointer; /* cursor en forma de mano para indicar que es clickable */
    }

    .thumbnail:hover {
    transform: scale(1.5); /* agrandar la imagen al pasar el cursor por encima */
    }

    /* agregar un evento click para agrandar la imagen */
    $('.thumbnail').on('click', function() {
    $(this).toggleClass('large'); /* agregar clase "large" para agrandar la imagen */
    });

    .large {
    width: 100%; /* tamaño original de la imagen */
    transform: scale(1); /* restablecer la escala */
    }
    .why-choose-two__img__one:hover, .why-choose-two__img__two:hover {
    transform: scale(1.1);
    z-index: 1;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .thumbnail {
    transition: transform 0.3s ease-in-out;
    }
    .why-choose-two__img img {
    transition: z-index 0.3s ease-in-out;
    }

    .why-choose-two__img img:hover {
    z-index: 1;
    }
</style>
<!-- Why Choose Two Start -->
<section class="why-choose-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6 wow fadeInLeft" data-wow-delay="200ms">
                <div class="why-choose-two__content">
                    <div class="sec-title text-left">
                        <br><br>
                        <p class="sec-title__tagline" style="font-size:24px">¿LISTO PARA DESCUBRIR?</p>
                        <!-- /.sec-title__tagline -->

                        <h2 class="sec-title__title">Descubre Nuestros Tours Exclusivos & Disfruta de la Aventura</h2>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <br>
                    <p class="why-choose-two__text">
                        Con nosotros, podrás experimentar la emoción de nuevos lugares y culturas
                    </p>

                    <br>
                    <div class="why-choose-two__box-wrapper">
                        <div class="why-choose-two__box">
                            <div class="why-choose-two__box__icon">
                                <span class="icon-low-price"></span>
                            </div><!-- /.why-choose-two__box__icon -->
                            <h4 class="why-choose-two__box__title">Precios Accesibles para Todos</h4>
                        </div><!-- /.why-choose-two__box -->
                        <div class="why-choose-two__box">
                            <div class="why-choose-two__box__icon">
                                <span class="icon-safety-First"></span>
                            </div><!-- /.why-choose-two__box__icon -->
                            <h4 class="why-choose-two__box__title">Tu Seguridad es Nuestra Prioridad</h4>
                        </div><!-- /.why-choose-two__box -->
                    </div><!-- /.why-choose-two__service -->
                    <br>
                    <div class="text-center">
                        <a href="{{ route('about') }}" class="trevlo-btn trevlo-btn--base"><span>Más
                                Información</span></a>
                    </div>
                </div><!-- /.why-choose-two__content -->
            </div><!-- /.col-lg-6 col-xl-6 -->
            <div class="col-lg-6 col-xl-6">
                <div class="why-choose-two__img">
                  <div class="why-choose-two__img__one wow fadeInUp" data-wow-delay="200ms" style="padding-bottom: 5px;">
                    <div class="trevlo-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                      <img src="{{ asset('assets/images/why-choose/barbaazul.jpg') }}" alt="Why Choose Us - Barba Azul" class="thumbnail" rel="lightbox[why-choose]">
                    </div>
                    <div class="trevlo-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                      <img src="{{ asset('assets/images/why-choose/caldera.jpg') }}" alt="Why Choose Us - Caldera" class="thumbnail" rel="lightbox[why-choose]">
                    </div>
                  </div><!-- /.why-choose-two__img__one -->
                  <div class="why-choose-two__img__two wow fadeInUp" data-wow-delay="300ms" style="padding-bottom: 5px;">
                    <div class="trevlo-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                      <img src="{{ asset('assets/images/why-choose/lagunasmancornadas.jpg') }}" alt="Why Choose Us - Lagunas Mancornadas" class="thumbnail" rel="lightbox[why-choose]">
                    </div>
                    <div class="trevlo-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                      <img src="{{ asset('assets/images/why-choose/luchachi.jpg') }}" alt="Why Choose Us - Luchachi" class="thumbnail" rel="lightbox[why-choose]">
                    </div>
                  </div><!-- /.why-choose-two__img__two -->
                </div><!-- /.why-choose-two__img-box -->
              </div><!-- /.col-lg-6 col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- Why Choose Two End -->