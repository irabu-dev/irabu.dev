<section id="team" class="section">
    <div class="wrap">
        <h2 class="title line-after mb-16">Meet our team</h2>
    </div>
    <div class="wrap-6 items-start">
        @foreach($members as $member)
            @include('pages.about.partials.member')
        @endforeach
    </div>
</section>
