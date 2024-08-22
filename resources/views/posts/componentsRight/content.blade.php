<section class="section-top" style="position: relative; margin-bottom: 70px; ">
    <div class="container" >
        <div class="row mb-5 d-none d-lg-block">
            <div class="col ">
                <div class="miga-pan">
                    <span><a href="{{ route('home') }}">Inicio</a> ></span>
                    <span><a href="{{ route('post.index') }}">blog </a> ></span>
                    <span>
                        <strong>
                            {{ $post->title }}
                        </strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
