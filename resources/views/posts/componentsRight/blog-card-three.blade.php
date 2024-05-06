<div class="blog-card-three">
    <div class="blog__card">
        <div class="blog__card-img wow animated fadeInUp" data-wow-delay="0s"
            data-wow-duration="1500ms">
            <img src="{{Voyager::image($post->image)}}" alt="blog-details">
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
            <div class="blog__card-date">
                <h4 class="blog__card-date-number">{{ $post->created_at->format('d') }}</h4>
                <p class="blog__card-date-month">{{ $post->created_at ? $meses[$post->created_at->format('n')] : '' }} {{ $post->created_at->format('Y') }}</p>
            </div><!-- /.blog__card-date -->
        </div><!-- /.blog__card-img -->
        <div class="blog__card-content wow animated fadeInUp" data-wow-delay="0.1s"
            data-wow-duration="1500ms">
            <ul class="blog__card-meta">
                {{-- <li>
                    <span class="blog__card-meta-icon icon-user"></span>
                    <span class="blog__card-meta-author">By Admin</span>
                </li>
                <li>
                    <span class="blog__card-meta-icon icon-bubble-chat-1"></span>
                    <span class="blog__card-meta-author">2 Comment</span>
                </li> --}}
            </ul>
            <!-- /.blog__card-meta -->
            <h3 class="blog__card-title">{{$post->title}}</h3>
            {!! $post->body !!}
        </div><!-- /.blog-details__card-content -->
    </div><!-- /.blog-details__card -->
</div><!-- /.blog-card-three -->
