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
<div class="col-md-6 col-xl-4 wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
    <div class="blog-card">
        <a href="{{route('room.public.show', $room->id)}}" class="blog-card__image-link">
            <img height="450px" src="{{Voyager::image($room->image)}}" alt="{{$room->title}}"
                class="blog-card__image">
            <div class="blog-card__overlay">
                <span class="blog-card__plus icon-plus"></span>
            </div><!-- /.blog-card__overlay -->
        </a><!-- /.blog-card__image-link -->
        <div class="blog-card__content">
            <div class="blog-card__date">
                <h4 class="blog-card__date-number">{{ $room->created_at->format('d') }}</h4>
                <h4 class="blog-card__date-month">{{ $room->created_at ? $meses[$room->created_at->format('n')] : '' }}</h4>
            </div><!-- /.blog-card__date -->
            <!-- /.blog-card__meta -->
            <h3 class="blog-card__title">
                <a href="{{route('room.public.show', $room->id)}}">
                    {{$room->title}}
                </a>
            </h3><!-- /.blog-card__title -->
            <a href="{{route('room.public.show', $room->id)}}" class="blog-card__link">
                Leer Más
                <i class="fas fa-arrow-right"></i>
            </a><!-- /.blog-card__link -->
        </div><!-- /.blog-card__content -->
    </div><!-- /.blog-card -->
</div><!-- /.col-md-6 col-xl-4 -->
