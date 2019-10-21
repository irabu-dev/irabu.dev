<section id="cta" class="section">
    <div class="wrap">
        <div class="inset-blue">
            <div class="wrap-inset md:items-end" style="--cols: 1fr 1fr">
                <div class="links-underline links-white">
                    <p class="text-2xl">
                        @isset($github)
                            Mail us a brief motivation, CV and GitHub details.
                        @else
                            Mail us a brief motivation and CV.
                        @endisset
                    </p>
                </div>
                <h2 class="title-xl | grid-text-right">
                    <a class="link-white link-underline" href="{{ mailto(
'I would be a good match!',
'This is exiting! Send us:
- your CV
- a brief motivation
' . ( isset($github) ? '- GitHub details or code examples' : '' )
) }}">Apply today</a>.
                </h2>
            </div>
        </div>
        <p class="mt-8 text-xs text-grey">
            Every application will receive a response <br>and will be handled confidentially.
        </p>
    </div>
</section>
