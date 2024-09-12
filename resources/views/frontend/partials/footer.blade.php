<footer class="text-center text-lg-start text-dark">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4 text-white" style="background-color: #21D192">
        <!-- Left -->
        <div class="me-5">
            <span>Conéctate con nosotros en las redes sociales:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="https://www.facebook.com/Aguaysalecoalbergue" target="_blank" class="text-white me-4 ">
                <i class="fab fa-facebook fs-2x display-6"></i>
            </a>
            <a href="https://wa.me/59171124428" target="_blank" class="text-white me-4">
                <i class="fab fa-whatsapp fs-2x display-6"></i>
            </a>
            <a href="https://www.instagram.com/aguaysal_ecoalbergue/" class="text-white me-4">
                <i class="fab fa-instagram fs-2x display-6"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold">Aguaysal</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                <p>
                    Aguaysal se encuentra en Santa Rosa del Yacuma, en la región del departamento del Beni, y está rodeado de naturaleza.
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Información</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px" />

                <p>
                    <a href="{{ route('about') }}" class="text-dark">Sobre Nosotros</a>
                </p>
                <p>
                    <a href="{{ route('post.index') }}" class="text-dark">Destino</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Explorar</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                <p>
                    <a href="{{ route('room.public.index') }}" class="text-dark">Habitaciones</a>
                </p>
                <p>
                    <a href="{{ route('specialpackage.public.index') }}" class="text-dark">Paquetes Espaciales</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Contacto</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                <p>
                    <i class="fas fa-envelope mr-3"></i>
                    <a href="mailto:{{setting('contacto.email')}}"
                        class="text-dark">Email{{setting('contacto.email')}}</a>
                </p>
                <p><i class="fas fa-phone mr-3"></i> <a href="tel:{{setting('contacto.phone')}}"
                        class="text-dark">Teléfono{{setting('contacto.phone')}}</a></p>
                <p><i class="fas fa-phone mr-3"></i> <a href="https://wa.me/59171124428" target="_blank"
                        class="text-dark">WhatsApp: (591) 71124428</a></p>

            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        &copy; <span class="dynamic-year"></span> Copyright:
        <a class="text-dark gadbeni" href="https://www.beni.gob.bo/index.php">GADBENI</a> Todos los derechos reservados.
    </div>
    <!-- Copyright -->
</footer>
