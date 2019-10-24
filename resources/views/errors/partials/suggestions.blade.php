<section id="resources" class="section">
    <div class="wrap">
        <div class="inset-blue">
            <div class="grid-rows gap-8 | md:grid-cols md:items-center" style="--cols: 1fr 1fr">
                <h2 class="title-xl">
                    A few <br>suggestions
                </h2>
                <ul class="text-2xl links-white links-underline bullets bullets-white">
                    <li>
                        <span class="icon">{{ svg('icons/far-angle-right') }}</span>
                        <a href="{{ route('home') }}">Homepage</a>
                    </li>
                    <li>
                        <span class="icon">{{ svg('icons/far-angle-right') }}</span>
                        <a class="link-white link-underline" href="{{ mailto(
                            'Potential project brief',
                            'Tell us as much as you can about
                            - your online project
                            - your planning
                            - your budget
                            - …
                            
                            Anything that helps us to start straightforward!'
                            ) }}">Brief us</a>
                    </li>
                    <li>
                        <span class="icon">{{ svg('icons/far-angle-right') }}</span>
                        <a href="{{ route('about') }}">About us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>