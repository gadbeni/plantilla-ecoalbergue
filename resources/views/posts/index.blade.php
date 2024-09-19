@extends('frontend.index')

@section('content')
    @include('posts.components.content')

    <div class="blog-page1 section-space">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    @component('posts.components.blog-card', ['post' => $post])

                    @endcomponent
                @endforeach
            </div><!-- /.row -->
            @component('posts.components.post-pagination', ['posts' => $posts])
            @endcomponent
            <br>
        </div><!-- /.container -->
    </div><!-- /.blog-page -->
    <!-- Blog Page End -->

@endsection
