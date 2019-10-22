<div id="match" class="modal" onclick="history.back()">
    <div class="mr-16 bg-white max-w-xl max-h-screen p-8 z-20 overflow-scroll shadow-lg | md:p-16 md:mx-8">
        <h2 class="text-center title-xl">A good fit?</h2>

        <div class="mt-16 markup grid gap-8 | md:grid-cols " style="--cols: 1fr 1fr">
            <div class=text-blue>
                <h3 class=title-sm>What we do best</h3>
                <ul class="mt-4 line-l">
                    <li>Consultation</li>
                    <li>Lean design and development</li>
                    <li>Quick MVP approach(Minimum Viable Product)</li>
                    <li>Simple and clean solutions</li>
                    <li>Modular design</li>
                    <li>Iterate based on feedback</li>
                    <li>Testing and deployment</li>
                    <li>Production and scaling</li>
                </ul>
            </div>
            <div class="text-grey">
                <h3 class=title-sm>Let's grab a cup of tea</h3>
                <ul class="mt-4 line-l">
                    <li>
                        We need to understand your project, so that we can design and develop a custom solution to address
                        the challenges.
                    </li>
                    <br>
                    <li>Let's get in touch.</li>
                    <li><a href="mailto:info@irabu.co.tz">info@irabu.co.tz</a></li>
                    <li><a href="#tel">(+255) 744 650 849</a></li>
                    <li>
                        <a class="link" href="https://goo.gl/maps/mxz4TfEfKQciCeog8"
                            target="_blank" rel="noreferrer noopener">
                            Our office HQ
                            <span class="icon px-2 fill-pink group-hover:opacity-75 transition-fill transition-fast">
                                {{ svg('icons/fas-map-marker-alt') }}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <p class="mt-8 text-xl">In short: we'd like to be a <strong>substantial part</strong> of your project. <br>
            Read more on <a class="link-underline link-blue" href="{{ route('web-development') }}">how we work</a>,
            or <a href="{{ mailto(
                'A good match!',
                'Tell us as much as you can about
                - your online project
                - your planning
                - your budget
                - …

                Anything that helps us to start straightforward!'
                ) }}" class="link-underline link-blue">get in touch</a>!
        </p>
    </div>
</div>