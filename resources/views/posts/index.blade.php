@extends('frontend.index')

@section('content')
    @include('posts.components.content')


    <div class="blog-page section-space">
        <div class="container">
            <div class="row">
                @component('posts.components.blog-card')

                @endcomponent
            </div><!-- /.row -->
            @component('posts.components.post-pagination')
            @endcomponent
        </div><!-- /.container -->
    </div><!-- /.blog-page -->
    <!-- Blog Page End -->

@endsection

