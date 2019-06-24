<?php

use App\Models\Member;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    protected $members = [
        'julius@irabu.co.tz' => [
            'first_name' => 'Julius',
            'last_name' => 'Theodore Moshiro',
            'role' => 'Senior Captain',
            'description' => 'Julius is our godfather of backend code.',
            'twitter' => 'juliusmoshiro ',
            'website' => 'https://k15.photos',
            'founder' => true,
            'public_email' => true,
        ],

        'emmanuel@irabu.co.tz' => [
            'first_name' => 'Emmanuel',
            'last_name' => 'Evance',
            'role' => 'Operations Lead',
            'description' => 'He play around with technology to build cool and simple stuff to our everyday life challenges',
            'twitter' => 'mtuchidev',
            'website' => 'https://mtuchi.dev',
            'founder' => true,
            'public_email' => true,
        ],

        'lupyana@irabu.co.tz' => [
            'first_name' => 'Lupyana',
            'last_name' => 'Nabothi Mbembati',
            'role' => 'Fullstack Developer',
            'description' => 'Is there something this guy can\'t do? 🤔',
            'twitter' => '_lupyana',
            'founder' => true,
            'public_email' => true,
        ],

        'nyiti@irabu.co.tz' => [
            'first_name' => 'Stewart',
            'last_name' => 'Raymond Nyiti',
            'role' => 'Developer',
            'description' => 'He work in different timezone, When everybody is asleep he is debuging some code.',
            'twitter' => '',
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
