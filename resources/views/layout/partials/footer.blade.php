<footer class="bg-grey-lightest | print:shadow-none print:bg-transparent print:gradient-none">
    <div class="flex-none pt-16 pb-8 | print:pb-2" role="navigation">
        <div class="wrap links links-grey leading-loose | md:leading-normal">
            @include('layout.partials.menu')
            <hr class="my-8 h-2px text-grey opacity-25 rounded | print:text-black" style="page-break-after: avoid;">
            <div class="grid gapy-4 text-sm | sm:grid-repeat sm:gapx-8 | md:flex flex-row-reverse justify-between" style="--col-repeat:2;--row-repeat:1;">
                <address class="grid gapy-4 | sm:gap-0 | md:grid-flow-column md:gapx-8 md:text-right">
                    <div>
                        <a class="group flex items-end | md:flex-row-reverse" href="https://goo.gl/maps/Qe39fmR5RTC2" target="_blank" rel="nofollow noreferrer noopener">
                            <span>
                                Irabu Systems ltd
                                <br>
                                Makingira Street, Dar es Salaam
                            </span>
                            <span class="icon px-2 fill-grey-lighter group-hover:fill-pink transition-fill transition-fast | print:hidden">
                                {{ svg('icons/fas-map-marker-alt') }}
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="mailto:info@irabu.co.tz">info@irabu.co.tz</a>
                        <br>
                        <a href="#tel">+255 716 223 723</a>
                    </div>
                </address>
                <ul class="hidden grid-flow-column gapx-8 | sm:block md:order-0 md:grid | print:hidden">
                    <li>
                        <a href="https://github.com/irabu-dev" target="_blank" rel="nofollow noreferrer noopener">
                            GitHub
                        </a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/company/irabu" target="_blank" rel="nofollow noreferrer noopener">
                            Linkedin
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/irabudev" target="_blank" rel="nofollow noreferrer noopener">
                            Instagram
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/irabudev" target="_blank" rel="nofollow noreferrer noopener">
                            Twitter
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrap links links-grey text-xs py-4 opacity-50 | print:hidden">
        <a href="{{ route('legal.privacy') }}">Privacy</a>
        <a class="ml-4" href="{{ route('legal.disclaimer') }}">Disclaimer</a>
    </div>
</footer>

@include('layout.partials.modal-telephone')
