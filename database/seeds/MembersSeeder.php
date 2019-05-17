<?php

use App\Models\Member;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    protected $members = [
        'julius@irabu.co.tz' => [
            'first_name' => 'Julius',
            'last_name' => 'Theodore Moshiro',
            'role' => 'Backend developer',
            'description' => 'Julius is our godfather of backend code.',
            'twitter' => 'juliusmoshiro ',
            'website' => 'https://k15.photos',
            'founder' => true,
            'public_email' => true,
        ],

        'emmanuel@irabu.co.tz' => [
            'first_name' => 'Emmanuel',
            'last_name' => 'Evance',
            'role' => 'Full stack developer',
            'description' => 'Mtuchi really earns the label ‘full stack’. Throw anything at this guy and he\'ll kick it back to you as a component.',
            'twitter' => 'mtuchidev',
            'website' => 'https://mtuchi.github.io',
            'founder' => true,
            'public_email' => true,
        ],

        'lupyana@irabu.co.tz' => [
            'first_name' => 'Lupyana',
            'last_name' => 'Nabothi Mbembati',
            'role' => 'Frontend designer',
            'description' => 'You ended up in this particular place on the internet because Willem created this site. And this company. Is there something this guy can\'t do?',
            'twitter' => 'lupyana',
            'founder' => true,
            'public_email' => true,
        ],

        'nyiti@irabu.co.tz' => [
            'first_name' => 'Stewart',
            'last_name' => 'Raymond Nyiti',
            'role' => 'Project Manager',
            'description' => 'Who needs a status board when you have Wouter? This fellow knows a thing or 2 about closing Basecamp tickets.',
            'twitter' => 'nyiti',
            'public_email' => true,
        ],
    ];

    public function run()
    {
        foreach ($this->members as $email => $attributes) {
            Member::firstOrNew(['email' => $email])
                ->fill($attributes)
                ->save();
        }

        Member::whereNotIn('email', array_keys($this->members))
            ->delete();
    }
}
