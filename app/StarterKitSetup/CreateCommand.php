<?php

namespace App\StarterKitSetup;

use Illuminate\Console\Command;

class CreateCommand extends Command
{
    protected $signature = 'starterkit:create';

    public function handle(): int
    {
        // Get the GitHub Repo URL

        // Get the name

        // Get the description

        // Get the author's name

        // Get the author's sponsor link if one exists

        // Turn the name into a slug and a headline-cased string

        // Parse the vendor and kit from URL

        // Make replacements and write composer.json

        // Make replacements and write README.md


        return self::SUCCESS;
    }
}
