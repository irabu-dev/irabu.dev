@extends('layout.default', [
    // 'background' => '/backgrounds/code.jpg',
    'title' => 'Design & Development',
    'description' => 'About our preferred tools to build modern web applications. Read more on our technology stack and hire us as a team',
])

@section('content')

    @include('pages.laravel.partials.banner')

    <div class="section-group pt-0 | sm:-mt-16">
        @include('pages.laravel.partials.intro')
        {{-- @include('pages.laravel.partials.proof') --}}
        @include('pages.laravel.partials.stack')
    </div>

    @include('pages.laravel.partials.hire')

@endsection
