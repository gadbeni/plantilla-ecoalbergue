<div class="post-info">
    @if ($post->category)
    <div class="post-category">
        <h3 class="post-category__title">Categoria:</h3>
        <div class="post-category__btn-group">
            
                <span href="#"
                    class="post-category__btn trevlo-btn trevlo-btn--base"><span>{{ $post->category->name}}</span>
                </span>
            
        </div><!-- /.post-category__btn-group -->
    </div><!-- /.post-category -->
    @endif
    @if ($post->meta_keywords)
        <div class="post-tag">
            <h3 class="post-tag__title">Palabras Clave:</h3>
            <div class="post-tag__text-box">
                {{$post->meta_keywords}}
            </div><!-- /.post-tag__text-box -->
        </div><!-- /.post-tag -->
    @endif
</div><!-- /.post-info -->
