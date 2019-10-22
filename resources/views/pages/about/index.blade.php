@extends('layout.default', [
    'background' => '/backgrounds/set.jpg',
    'title' => 'About us',
    'description' => 'Contact us on info@irabu.co.tz or +255 744 650 849. See our contact details and get to know our team.',
])

@section('content')

    @include('pages.about.partials.banner')

    <div class="mt-4 section-group">
        @include('pages.vacancies.partials.jobs')
        @include('pages.about.partials.team')
    </div>

    <div class="section-group">
        @include('pages.about.partials.outro')
        @include('pages.about.partials.cta')
    </div>

@endsection
