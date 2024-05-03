@extends('frontend.index')

@section('content')
<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title wow animated fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms">Blog
            Details</h2>
        <div class="page-header__breadcrumb-box">
            <ul class="trevlo-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Blog Details</li>
            </ul><!-- /.trevlo-breadcrumb -->
        </div><!-- /.page-header__breadcrumb-box -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<!-- Blog Details Page Start -->
<div class="blog-details-page blog-details-page-right section-space-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details">
                    <div class="blog-card-three">
                        <div class="blog__card">
                            <div class="blog__card-img wow animated fadeInUp" data-wow-delay="0s"
                                data-wow-duration="1500ms">
                                <img src="assets/images/blog/blog-details-1.jpg" alt="blog-details">
                                <div class="blog__card-date">
                                    <h4 class="blog__card-date-number">31</h4>
                                    <p class="blog__card-date-month">July 2023</p>
                                </div><!-- /.blog__card-date -->
                            </div><!-- /.blog__card-img -->
                            <div class="blog__card-content wow animated fadeInUp" data-wow-delay="0.1s"
                                data-wow-duration="1500ms">
                                <ul class="blog__card-meta">
                                    <li>
                                        <span class="blog__card-meta-icon icon-user"></span>
                                        <span class="blog__card-meta-author">By Admin</span>
                                    </li>
                                    <li>
                                        <span class="blog__card-meta-icon icon-bubble-chat-1"></span>
                                        <span class="blog__card-meta-author">2 Comment</span>
                                    </li>
                                </ul><!-- /.blog__card-meta -->
                                <h3 class="blog__card-title">We Help You Drive Properly on the Road</h3>
                                <p class="blog__card-text">There are many variations of passages of Lorem Ipsum
                                    available, but the
                                    majority have suffered alteradution in some form by injected humour, or randomised
                                    words which don't
                                    look even slightly believable. If you are going There are many variations of
                                    passages of Lorem Ipsum
                                    available, but the majority have suffered alteradution in some form by injected
                                    humour, or
                                    randomised words which don't look even slightly believable. If you are going</p>
                                <p class="blog__card-text">There are many variations of passages of Lorem Ipsum
                                    available, but the
                                    majority have suffered alteradution in some form by injected humour, or randomised
                                    words which don't
                                    look even slightly believable. If you are going</p>
                            </div><!-- /.blog-details__card-content -->
                        </div><!-- /.blog-details__card -->
                    </div><!-- /.blog-card-three -->
                </div><!-- /.blog-details -->
                <div class="post-info">
                    <div class="post-category">
                        <h3 class="post-category__title">Post In:</h3>
                        <div class="post-category__btn-group">
                            <a href="blog-list-right.html"
                                class="post-category__btn trevlo-btn trevlo-btn--base"><span>Driving</span></a>
                            <a href="blog-list-left.html"
                                class="post-category__btn trevlo-btn trevlo-btn--base"><span>Development</span></a>
                        </div><!-- /.post-category__btn-group -->
                    </div><!-- /.post-category -->
                    <div class="post-tag">
                        <h3 class="post-tag__title">Tags:</h3>
                        <div class="post-tag__text-box">
                            <a href="blog-list-left.html" class="post-tag__text">Safty,</a>
                            <a href="blog-list-right.html" class="post-tag__text">Learning</a>
                        </div><!-- /.post-tag__text-box -->
                    </div><!-- /.post-tag -->
                </div><!-- /.post-info -->
                <div class="comment-wrapper">
                    <div class="comment-wrapper__title-box">
                        <h3 class="comment-wrapper__title"><span>2</span> Comments</h3>
                    </div><!-- /.comment-wrapper__title-box -->
                    <div class="comment-box comment-box-one">
                        <div class="comment-box__image wow animated fadeInUp" data-wow-delay="0s"
                            data-wow-duration="1500ms">
                            <img src="assets/images/blog/blog-comment-1-1.jpg" alt="David Shon">
                        </div><!-- /.comment-box__image -->
                        <div class="comment-box__content wow animated fadeInUp" data-wow-delay="0.3s"
                            data-wow-duration="1500ms">
                            <h3 class="comment-box__name">David Shon</h3>
                            <p class="comment-box__text">Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam
                                nec eros id magna
                                hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit.</p>
                            <a href="#" class="comment-box__btn trevlo-btn trevlo-btn--white-two"><span>Reply</span></a>
                        </div><!-- /.comment-box__content -->
                    </div><!-- /.comment-box -->
                    <div class="comment-box comment-box-two">
                        <div class="comment-box__image wow animated fadeInUp" data-wow-delay="0s"
                            data-wow-duration="1500ms">
                            <img src="assets/images/blog/blog-comment-1-2.jpg" alt="Jhon Watchson">
                        </div><!-- /.comment-box__image -->
                        <div class="comment-box__content wow animated fadeInUp" data-wow-delay="0.3s"
                            data-wow-duration="1500ms">
                            <h3 class="comment-box__name">Jhon Watchson</h3>
                            <p class="comment-box__text">Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam
                                nec eros id magna
                                hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit.</p>
                            <a href="#" class="comment-box__btn trevlo-btn trevlo-btn--white-two"><span>Reply</span></a>
                        </div><!-- /.comment-box__content -->
                    </div><!-- /.comment-box -->
                </div><!-- /.comment-wrapper -->
                <div class="comment-form">
                    <div class="comment-form__inner-container container-fluid">
                        <h3 class="comment-form__title">Leave a Comment</h3>
                        <form class="form-one row gutter-20">
                            <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                                <div class="form-one__group">
                                    <input type="text" name="form-box-name-input" id="form-one-name-input"
                                        placeholder="Your Name" class="form-one__input">
                                </div><!-- /.form-one__group -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0.3s"
                                data-wow-duration="1500ms">
                                <div class="form-one__group">
                                    <input type="email" name="form-box-email-input" id="form-one-email-input"
                                        placeholder="Email Address" class="form-one__input">
                                </div><!-- /.form-one__group -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <div class="form-one__group">
                                    <textarea name="form-one-message-input" id="form-one-message-input" cols="30"
                                        rows="10" placeholder="Write a Message"
                                        class="form-one__message form-one__input"></textarea>
                                </div><!-- /.form-one__group -->
                            </div><!-- /.col-12-->
                            <div class="col-12 wow animated fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                <div class="form-one__btn-box">
                                    <button type="submit" class="form-one__btn trevlo-btn trevlo-btn--base"><span>Leave
                                            a Comment</span></button>
                                </div><!-- /.form-one__btn-box -->
                            </div><!-- /.col-12-->
                        </form>
                    </div><!-- /.comment-form__inner-container container-fluid -->
                </div><!-- /.comment-form -->
            </div><!-- /.col-xl-8 col-lg-7 -->
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-blog @@extraClassName">
                    <aside class="widget-area">
                        <div class="sidebar-blog__single sidebar-blog__single--search wow animated fadeInUp"
                            data-wow-delay="0s" data-wow-duration="1500ms">
                            <form action="#" class="sidebar-blog__search">
                                <button type="submit" aria-label="search submit">
                                    <span class="icon-search"></span>
                                </button>
                                <input type="text" placeholder="Type Here" />
                            </form><!-- /.sidebar-blog__search -->
                        </div><!-- /.sidebar-blog__single -->
                        <div class="sidebar-blog__single sidebar-blog__single--posts wow animated fadeInUp"
                            data-wow-delay="0.1s" data-wow-duration="1500ms">
                            <h4 class="sidebar-blog__title">Latest posts</h4><!-- /.sidebar-blog__title -->
                            <ul class="sidebar-blog__posts ">
                                <li class="sidebar-blog__posts-item">
                                    <div class="sidebar-blog__posts-image">
                                        <img src="assets/images/blog/latest-post-1-1.jpg" alt="latest-post">
                                    </div><!-- /.sidebar-blog__posts-image -->
                                    <div class="sidebar-blog__posts-content">
                                        <p class="sidebar-blog__posts-date">
                                            <i class="far fa-clock"></i>
                                            26 Mar, 2023
                                        </p><!-- /.sidebar__posts-date -->
                                        <h4 class="sidebar-blog__posts-title"><a href="blog-details-right.html">The
                                                Complete Web Developer Guideline</a></h4>
                                        <!-- /.sidebar-blog__posts-title -->
                                    </div><!-- /.sidebar-blog__posts-content -->
                                </li>
                                <li class="sidebar-blog__posts-item">
                                    <div class="sidebar-blog__posts-image">
                                        <img src="assets/images/blog/latest-post-1-2.jpg" alt="latest-post">
                                    </div><!-- /.sidebar-blog__posts-image -->
                                    <div class="sidebar-blog__posts-content">
                                        <p class="sidebar-blog__posts-date">
                                            <i class="far fa-clock"></i>
                                            26 Mar, 2023
                                        </p><!-- /.sidebar-blog__posts-date -->
                                        <h4 class="sidebar-blog__posts-title"><a href="blog-details-right.html">The
                                                Complete Web Developer Guideline</a></h4>
                                        <!-- /.sidebar-blog__posts-title -->
                                    </div><!-- /.sidebar-blog__posts-content -->
                                </li>
                                <li class="sidebar-blog__posts-item">
                                    <div class="sidebar-blog__posts-image">
                                        <img src="assets/images/blog/latest-post-1-3.jpg" alt="latest-post">
                                    </div><!-- /.sidebar-blog__posts-image -->
                                    <div class="sidebar-blog__posts-content">
                                        <p class="sidebar-blog__posts-date">
                                            <i class="far fa-clock"></i>
                                            26 Mar, 2023
                                        </p><!-- /.sidebar-blog__posts-date -->
                                        <h4 class="sidebar-blog__posts-title"><a href="blog-details-right.html">The
                                                Complete Web Developer Guideline</a></h4>
                                        <!-- /.sidebar-blog__posts-title -->
                                    </div><!-- /.sidebar-blog__posts-content -->
                                </li>
                            </ul><!-- /.sidebar-blog__posts  -->
                        </div><!-- /.sidebar-blog__single -->
                        <div class="sidebar-blog__single sidebar-blog__single--categories wow animated fadeInUp"
                            data-wow-delay="0.2s" data-wow-duration="1500ms">
                            <h4 class="sidebar-blog__title">Categories</h4><!-- /.sidebar-blog__title -->
                            <ul class="sidebar-blog__categories ">
                                <li><a href="blog-details-right.html">Web Development</a></li>
                                <li><a href="blog-details-right.html">Social Marketing</a></li>
                                <li><a href="blog-details-right.html">Technology</a></li>
                                <li><a href="blog-details-right.html">Business & Finance</a></li>
                                <li><a href="blog-details-right.html">Digital Solution</a></li>
                            </ul><!-- /.sidebar-blog__categories  -->
                        </div><!-- /.sidebar-blog__single -->
                        <div class="sidebar-blog__single sidebar-blog__single--tags wow animated fadeInUp"
                            data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <h4 class="sidebar-blog__title">Tags</h4><!-- /.sidebar-blog__title -->
                            <div class="sidebar-blog__tags">
                                <a href="blog-details-right.html"
                                    class="trevlo-btn trevlo-btn--white-two"><span>Marketing</span></a>
                                <a href="blog-details-right.html"
                                    class="trevlo-btn trevlo-btn--white-two"><span>Development</span></a>
                                <a href="blog-details-right.html"
                                    class="trevlo-btn trevlo-btn--white-two"><span>Digital</span></a>
                                <a href="blog-details-right.html"
                                    class="trevlo-btn trevlo-btn--white-two"><span>Design</span></a>
                            </div><!-- /.sidebar-blog__tags -->
                        </div><!-- /.sidebar-blog__single -->
                        <div class="sidebar-blog__single sidebar-blog__single--comments wow animated fadeInUp"
                            data-wow-delay="0.4s" data-wow-duration="1500ms">
                            <h4 class="sidebar-blog__title">Comments</h4><!-- /.sidebar-blog__title -->
                            <ul class="sidebar-blog__comments ">
                                <li class="sidebar-blog__comments-item">
                                    <div class="sidebar-blog__comments-icon">
                                        <i class="far fa-comment-dots"></i>
                                    </div><!-- /.sidebar-blog__comments-icon -->
                                    <h6 class="sidebar-blog__comments-title"><a href="blog-details-right.html">There are
                                            many variations of Lorem available Here</a></h6>
                                    <!-- /.sidebar-blog__comments-title -->
                                </li>
                                <li class="sidebar-blog__comments-item">
                                    <div class="sidebar-blog__comments-icon">
                                        <i class="far fa-comment-dots"></i>
                                    </div><!-- /.sidebar-blog__comments-icon -->
                                    <h6 class="sidebar-blog__comments-title"><a href="blog-details-right.html">There are
                                            many variations of Lorem available Here</a></h6>
                                    <!-- /.sidebar-blog__comments-title -->
                                </li>
                                <li class="sidebar-blog__comments-item">
                                    <div class="sidebar-blog__comments-icon">
                                        <i class="far fa-comment-dots"></i>
                                    </div><!-- /.sidebar-blog__comments-icon -->
                                    <h6 class="sidebar-blog__comments-title"><a href="blog-details-right.html">There are
                                            many variations of Lorem available Here</a></h6>
                                    <!-- /.sidebar-blog__comments-title -->
                                </li>
                                <li class="sidebar-blog__comments-item">
                                    <div class="sidebar-blog__comments-icon">
                                        <i class="far fa-comment-dots"></i>
                                    </div><!-- /.sidebar-blog__comments-icon -->
                                    <h6 class="sidebar-blog__comments-title"><a href="blog-details-right.html">There are
                                            many variations of Lorem available Here</a></h6>
                                    <!-- /.sidebar-blog__comments-title -->
                                </li>
                            </ul><!-- /.sidebar-blog__comments  -->
                        </div><!-- /.sidebar-blog__single -->
                    </aside><!-- /.widget-area -->
                </div><!-- /.sidebar-blog -->
            </div><!-- /.col-xl-4 col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog-details-page -->
<!-- Blog Details Page End -->

@endsection
