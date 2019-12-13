<p class="text-2xl mt-12 grid-rows gapx-16 gapy-4 | md:mt-16 md:grid-cols justify-start items-start" style="--cols: auto auto auto">
    <span>
        <a class="link link-black" href="mailto:info@irabu.co.tz">info@irabu.co.tz</a>
        <br>
        
        <a class="link link-black" href="#tel">+255 744 650 849</a>
    </span>
    <a class="group block link link-black" href="https://goo.gl/maps/mxz4TfEfKQciCeog8" target="_blank" rel="noreferrer noopener">
            Irabu Systems ltd
            <br>
            Kilongawima Street <br>Dar es Salaam
            <span class="icon px-2 fill-pink group-hover:opacity-75 transition-fill transition-fast">
                {{ svg('icons/fas-map-marker-alt') }}
            </span>
        </span>
    </a>
    @isset($financialContacts)
        <span class="text-xs mt-2 leading-loose">
            <a class="link link-black" href="https://github.com/irabu-dev" target="_blank" rel="noreferrer noopener">Github</a>
            <br>
            <a class="link link-black" href="https://linkedin.com/company/irabu" target="_blank" rel="noreferrer noopener">Linkedin</a>
            <br>
            <a class="link link-black" href="https://www.instagram.com/irabudev" target="_blank" rel="noreferrer noopener">Instagram</a>
            <br>
            <a class="link link-black" href="https://twitter.com/intent/tweet?text=Dear+@irabudev+…" target="_blank" rel="noreferrer noopener">Twitter</a>
        </span>
    @endisset
</p>
