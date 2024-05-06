<div class="sidebar-blog @@extraClassName">
    <aside class="widget-area">
        {{-- <div class="sidebar-blog__single sidebar-blog__single--search wow animated fadeInUp"
            data-wow-delay="0s" data-wow-duration="1500ms">
            <form action="#" class="sidebar-blog__search">
                <button type="submit" aria-label="search submit">
                    <span class="icon-search"></span>
                </button>
                <input type="text" placeholder="Type Here" />
            </form><!-- /.sidebar-blog__search -->
        </div> --}}
        <!-- /.sidebar-blog__single -->
        @php
            $meses = [
                1 => 'Ene',
                2 => 'Feb',
                3 => 'Mar',
                4 => 'Abr',
                5 => 'May',
                6 => 'Jun',
                7 => 'Jul',
                8 => 'Ago',
                9 => 'Sep',
                10 => 'Oct',
                11 => 'Nov',
                12 => 'Dic',
            ];
        @endphp
        <div class="sidebar-blog__single sidebar-blog__single--posts wow animated fadeInUp"
            data-wow-delay="0.1s" data-wow-duration="1500ms">
            <h4 class="sidebar-blog__title">Ultimos Posts</h4><!-- /.sidebar-blog__title -->
            <ul class="sidebar-blog__posts ">
                @foreach ($posts as $post)
                    <li class="sidebar-blog__posts-item">
                        <div class="sidebar-blog__posts-image">
                            <img src="{{Voyager::image($post->image)}}" alt="latest-post">
                        </div><!-- /.sidebar-blog__posts-image -->
                        <div class="sidebar-blog__posts-content">
                            <p class="sidebar-blog__posts-date">
                                <i class="far fa-clock"></i>
                                {{ $post->created_at->format('d') }}
                                {{ $post->created_at ? $meses[$post->created_at->format('n')] : '' }},
                                {{ $post->created_at->format('Y') }}
                            </p><!-- /.sidebar__posts-date -->
                            <h4 class="sidebar-blog__posts-title">
                                <a href="{{ route('post.show', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                            </h4>
                            <!-- /.sidebar-blog__posts-title -->
                        </div><!-- /.sidebar-blog__posts-content -->
                    </li>
                @endforeach
            </ul><!-- /.sidebar-blog__posts  -->
        </div><!-- /.sidebar-blog__single -->


        {{-- <div class="sidebar-blog__single sidebar-blog__single--categories wow animated fadeInUp"
            data-wow-delay="0.2s" data-wow-duration="1500ms">
            <h4 class="sidebar-blog__title">Categories</h4><!-- /.sidebar-blog__title -->
            <ul class="sidebar-blog__categories ">
                <li><a href="blog-details-right.html">Web Development</a></li>
                <li><a href="blog-details-right.html">Social Marketing</a></li>
                <li><a href="blog-details-right.html">Technology</a></li>
                <li><a href="blog-details-right.html">Business & Finance</a></li>
                <li><a href="blog-details-right.html">Digital Solution</a></li>
            </ul><!-- /.sidebar-blog__categories  -->
        </div><!-- /.sidebar-blog__single --> --}}


        {{-- <div class="sidebar-blog__single sidebar-blog__single--tags wow animated fadeInUp"
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
        </div><!-- /.sidebar-blog__single --> --}}


        {{-- <div class="sidebar-blog__single sidebar-blog__single--comments wow animated fadeInUp"
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
        </div><!-- /.sidebar-blog__single --> --}}

    </aside><!-- /.widget-area -->
</div><!-- /.sidebar-blog -->
