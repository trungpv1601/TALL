<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\Command;

class TALLCommand extends Command
{
    public $signature = 'make:tall {model}';

    public $description = 'Make TALL interface for model.';

    public function handle()
    {
        $this->callSilent('tall:view-all', ['name' => $this->argument('model')]);
        $this->callSilent('tall:create', ['name' => $this->argument('model')]);
        $this->callSilent('tall:update', ['name' => $this->argument('model')]);
        $this->callSilent('tall:view', ['name' => $this->argument('model')]);
        $this->callSilent('tall:delete', ['name' => $this->argument('model')]);

        $this->comment('All done');
    }
}
