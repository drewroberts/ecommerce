<?php

namespace DrewRoberts\Ecommerce\Commands;

use Illuminate\Console\Command;

class EcommerceCommand extends Command
{
    public $signature = 'ecommerce';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
