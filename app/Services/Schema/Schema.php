<?php

namespace App\Services\Schema;

use App\Models\Member;
use Spatie\SchemaOrg\LocalBusiness;
use Spatie\SchemaOrg\PostalAddress;
use Spatie\SchemaOrg\Schema as Builder;

class Schema
{
    public function localBusiness(): LocalBusiness
    {
        return Builder::localBusiness()
            ->name('Irabu')
            ->email('info@irabu.co.tz')
            ->telephone('+255 744 650 849')
            ->vatID('')
            ->url([
                'https://irabu.dev',
                'https://twitter.com/irabudev',
            ])
            ->image('https://irabu.dev/images/social.png')
            ->address($this->address())
            ->founders($this->founders())
            ->employees($this->employees());
    }

    protected function address(): PostalAddress
    {
        return Builder::postalAddress()
            ->addressLocality('Tanzania')
            ->addressRegion('Dar es Salaam')
            ->postalCode(31890)
            ->streetAddress('Kilongawima Street')
            ->addressCountry('Tanzania');
    }

    protected function founders(): array
    {
        return Member::founder()->get()->map->schema()->toArray();
    }

    protected function employees(): array
    {
        return Member::employee()->get()->map->schema()->toArray();
    }
}
