<?php

namespace App\Providers;

use Barryvdh\Debugbar\ServiceProvider;
use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

class NavigationServiceProvider extends ServiceProvider
{
    public function register()
    {
        Menu::macro('main', function (array $properties = []) {
            return Menu::new()
                ->route('home', 'Home')
                ->route('web-development', 'Our Process')
                ->route('laravel', 'Our Stack')
                // ->route('open-source.index', 'Open source')
                ->route('about', 'About Us')
                ->setActiveFromRequest()
                ->addClass($properties['class'] ?? '');
        });

        Menu::macro('opensource', function () {
            return Menu::new()
                ->route('open-source.index', 'Overview')
                ->route('open-source.packages', 'Packages')
                ->route('open-source.projects', 'Projects')
                ->route('open-source.postcards', 'Postcard wall')
                ->addClass('text-xl leading-loose links-underline links-white')
                ->setActiveFromRequest('/open-source')
                ->setActiveClass('font-bold')
                ->each(function (Link $link) {
                    if ($link->isActive()) {
                        $link->append('<span class="ml-2 opacity-50 icon fill-white">'.svg('icons/far-angle-right').'</span>');
                    }
                });
        });
    }
}
