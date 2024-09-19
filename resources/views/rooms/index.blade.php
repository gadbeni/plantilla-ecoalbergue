@extends('frontend.index')

@section('content')
    <section class="section-top" style="position: relative; margin-bottom: 70px; ">
        <div class="container" >
            <div class="row mb-5 d-none d-lg-block">
                <div class="col ">
                    <div class="miga-pan">
                        <span><a href="/">Inicio</a> ></span>
                        <span>Habitaciones </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="blog-page1 section-space">
        <div class="container">
            <div class="row">
                @foreach ($rooms as $room)
                    @component('rooms.components.blog-card', ['room' => $room])

                    @endcomponent
                @endforeach
            </div>
            @component('rooms.components.room-pagination', ['rooms' => $rooms])
            @endcomponent
            <br>
        </div>
    </div>
    <!-- Blog Page End -->
@endsection
