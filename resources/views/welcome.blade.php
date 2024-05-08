@extends('frontend.index')

@section('content')

    @include('components.slider')

    @include('components.features')

    @include('components.about')
    <br>
    <br>
    {{-- @include('components.destination.destination') --}}

    {{-- @include('components.destination.tour-listing') --}}

    @include('components.destination.benefit-two')

    {{-- @include('components.destination.testimonial') --}}

    {{-- @include('components.destination.counter') --}}

    @include('components.destination.why-choose')

    {{-- @include('components.destination.gallery') --}}

    {{-- @include('components.destination.tab') --}}

    @include('components.destination.blog')

    @include('components.destination.cta')

@endsection()
