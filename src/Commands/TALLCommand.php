<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\Command;

class TALLCommand extends Command
{
    public $signature = 'TALL';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
