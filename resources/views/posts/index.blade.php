@extends('frontend.index2')

@section('content')
    @include('posts.components.content')

    <div class="blog-page section-space">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    @component('posts.components.blog-card', ['post' => $post])

                    @endcomponent
                @endforeach
            </div><!-- /.row -->
            @component('posts.components.post-pagination', ['posts' => $posts])
            @endcomponent
        </div><!-- /.container -->
    </div><!-- /.blog-page -->
    <!-- Blog Page End -->

@endsection
