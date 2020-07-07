<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class TALLCommand extends Command
{
    public $signature = 'make:tall-crud {model}';

    public $description = 'Make TALL CRUD interface for model.';

    public function handle()
    {
        $this->callSilent('tall-crud:view-all', ['name' => Str::plural($this->argument('model'))]);
        $this->callSilent('tall-crud:create', ['name' => $this->argument('model')]);
        $this->callSilent('tall-crud:update', ['name' => $this->argument('model')]);
        $this->callSilent('tall-crud:view', ['name' => $this->argument('model')]);
        $this->callSilent('tall-crud:delete', ['name' => $this->argument('model')]);

        $this->comment('All done');
    }
}
