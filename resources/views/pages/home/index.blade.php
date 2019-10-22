@extends('layout.default', [
    'background' => '/backgrounds/dar.jpg',
    'title' => 'Building to Simplify',
    'description' => 'At irabu we craft SIMPLE & VALUABLE solutions to everday challengess.',
])

@section('content')

@include('pages.home.partials.banner')
@include('pages.home.partials.news')

<div class="section-group">
    @include('pages.home.partials.portfolio')
    @include('pages.home.partials.cta')
    @include('pages.home.partials.clients')
</div>

{{-- @include('pages.home.partials.open-source') --}}

@endsection