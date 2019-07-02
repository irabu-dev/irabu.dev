<?php

namespace App\Console\Commands;

use App\Models\Contributor;
use App\Models\Repository;
use App\Services\GitHub\GitHubApi;
use Illuminate\Console\Command;

class ImportRandomContributor extends Command
{
    protected $signature = 'import:random-contributor';

    protected $description = 'Import random contributor.';

    /** @var \App\Services\GitHub\GitHubApi */
    protected $api;

    public function __construct(GitHubApi $api)
    {
        $this->api = $api;

        parent::__construct();
    }

    public function handle()
    {
        $this->info('Importing random contributor from GitHub...');

        [$contributorAttributes, $repository] = $this->getRandomContributor();

        $user = $this->api->getUser($contributorAttributes['login']);

        $contributor = Contributor::create([
            'username' => $contributorAttributes['login'],
            'avatar_url' => $contributorAttributes['avatar_url'],
            'name' => $user['name'],
            'repository_url' => $repository->url,
            'repository_name' => $repository->name,
        ]);

        Contributor::where('id', '<>', $contributor->id)->get()->each->delete();

        $this->comment("Imported user `{$contributor->username}`");
        $this->info('All done');
    }

    public function getRandomContributor(): array
    {
        $contributors = collect();

        while ($contributors->isEmpty()) {
            $repository = Repository::get()->random();

            $contributors = $this->api->fetchRepositoryContributors('irabu-dev', $repository->name)
                ->reject(function (array $contributorAttributes) {
                    return $this->worksForIrabu($contributorAttributes['login']);
                });
        }

        return [$contributors->random(), $repository];
    }

    public function worksForIrabu(string $username): bool
    {
        $irabuUsernames = [
            'irabu',
            'irabu-bot',
            'mtuchi',
            'lupyana',
            'juliustm',
        ];

        return in_array($username, $irabuUsernames);
    }
}
