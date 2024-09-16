@extends('frontend.en.index')

@section('content')
<main>
    <section id="hero">
        <div class="video-container">
            <video autoplay muted loop class="background-video full-container-max">
                <source src="{{ asset('assets/video/portada.webm')}}" type="video/webm">
                Your browser does not support HTML5 video.
            </video>
            <div class="overlay full-container-max"></div>
        </div>
        <div class="content">
            <h1>FEEL THE UNIQUE THRILL OF ADVENTURE</h1>
            <p>Welcome to Aguaysal</p>
        </div>
    </section>
@endsection
