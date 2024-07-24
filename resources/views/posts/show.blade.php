@extends('frontend.index2')

@section('content')
@include('posts.componentsRight.content')

<!-- Blog Details Page Start -->
<div class="blog-details-page blog-details-page-right section-space-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details">
                    @component('posts.componentsRight.blog-card-three', ['post' => $post])

                    @endcomponent
                </div><!-- /.blog-details -->

                @component('posts.componentsRight.post-info',['post' => $post])

                @endcomponent

                {{-- <div class="comment-wrapper">
                    @component('posts.componentsRight.comment-wrapper')

                    @endcomponent
                </div> --}}
            </div>
            <!-- /.col-xl-8 col-lg-7 -->
            <div class="col-xl-4 col-lg-5">
                @component('posts.componentsRight.sidebar-blog', ['posts' => $latestPosts])

                @endcomponent
            </div>
            <!-- /.col-xl-4 col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog-details-page -->
<!-- Blog Details Page End -->

@endsection


