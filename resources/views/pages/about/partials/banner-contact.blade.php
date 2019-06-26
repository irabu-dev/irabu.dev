<p class="text-2xl mt-12 grid-rows gapx-16 gapy-4 | md:mt-16 md:grid-cols justify-start items-start" style="--cols: auto auto auto">
    <span>
        <a class="link link-black" href="mailto:info@irabu.co.tz">info@irabu.co.tz</a>
        <br>
        <a class="link link-black" href="https://twitter.com/intent/tweet?text=Dear+@irabudev+…" target="_blank" rel="noreferrer noopener">@irabudev</a>
        <br>
        <a class="link link-black" href="#tel">+255 716 223 723</a>
    </span>
    <a class="group block link link-black" href="https://goo.gl/maps/mxz4TfEfKQciCeog8" target="_blank" rel="noreferrer noopener">
            Irabu Systems ltd
            <br>
            Makingira Street <br>Dar es Salaam
            <span class="icon px-2 fill-pink group-hover:opacity-75 transition-fill transition-fast">
                {{ svg('icons/fas-map-marker-alt') }}
            </span>
        </span>
    </a>
    @isset($financialContacts)
        <span class="text-xs mt-2 leading-loose">
            <span class="w-8 inline-block text-grey">TIN</span> BE0809.387.596
            <br>
            {{-- IBAN nr spaced out for readability but selectable with double click. --}}
            {{-- <span class="w-8 inline-block text-grey">IBAN</span> BE66<span class=ml-1>3631</span><span class=ml-1>2787</span><span class=ml-1>5443</span>
            <br>
            <span class="w-8 inline-block text-grey">BIC</span> BBRUBEBB --}}
        </span>
    @endisset
</p>
