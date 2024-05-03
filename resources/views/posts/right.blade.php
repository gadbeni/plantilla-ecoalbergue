@extends('frontend.index')

@section('content')
@include('posts.componentsRight.content')

<!-- Blog Details Page Start -->
<div class="blog-details-page blog-details-page-right section-space-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details">
                    @component('posts.componentsRight.blog-card-three')

                    @endcomponent
                </div><!-- /.blog-details -->

                @component('posts.componentsRight.post-info')

                @endcomponent

                <div class="comment-wrapper">
                    @component('posts.componentsRight.comment-wrapper')

                    @endcomponent
                </div>
            </div><!-- /.col-xl-8 col-lg-7 -->
            <div class="col-xl-4 col-lg-5">
                @component('posts.componentsRight.sidebar-blog')

                @endcomponent
            </div><!-- /.col-xl-4 col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog-details-page -->
<!-- Blog Details Page End -->

@endsection


