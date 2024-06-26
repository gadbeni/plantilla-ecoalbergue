{{-- <ul class="post-pagination @@extraClassName">
    <li>
        <a href="blog-grid.html">1</a>
    </li>
    <li>
        <a href="blog-list-right.html">2</a>
    </li>
    <li>
        <a href="blog-grid-right.html"><i class="fas fa-chevron-right"></i></a>
    </li>
</ul><!-- /.post-pagination --> --}}
<ul class="post-pagination @@extraClassName">
    <!-- Anterior -->
    @if ($posts->onFirstPage())
        <li class="disabled"><a disabled><i class="fas fa-chevron-left"></i></a></li>
    @else
        <li><a href="{{ $posts->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a></li>
    @endif

    <!-- Números -->
    @if ($posts->currentPage() != 1)
        <li><a href="{{ $posts->url(1) }}">1</a></li>
    @endif

    <li class="active"><a disabled><span>{{ $posts->currentPage() }}</span></a></li>

    @if ($posts->currentPage() != $posts->lastPage())
        <li><a href="{{ $posts->url($posts->lastPage()) }}">{{ $posts->lastPage() }}</a></li>
    @endif

    <!-- Siguiente -->
    @if ($posts->hasMorePages())
        <li><a href="{{ $posts->nextPageUrl() }}"><i class="fas fa-chevron-right"></i></a></li>
    @else
        <li class="disabled"><a disabled><i class="fas fa-chevron-right"></i></a></li>
    @endif
</ul>
