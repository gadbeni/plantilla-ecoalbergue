@props(['active'=>false])

@php
    $classActive = $active ? 'current' : '';
@endphp

<li class="{{ $classActive }}">
    <a {{ $attributes }}>
        {{ $slot }}
    </a>
</li>