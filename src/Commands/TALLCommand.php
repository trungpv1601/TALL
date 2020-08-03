<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class TALLCommand extends Command
{
    public $signature = 'make:tall {model}';

    public $description = 'Make TALL interface for model.';

    public function handle()
    {
        $this->callSilent('tall:index', ['name' => $this->argument('model')]);
        $this->callSilent('tall:create', ['name' => $this->argument('model')]);
        $this->callSilent('tall:update', ['name' => $this->argument('model')]);
        $this->callSilent('tall:view', ['name' => $this->argument('model')]);
        $this->callSilent('tall:delete', ['name' => $this->argument('model')]);

        $this->comment('All done');

        $this->line("<options=bold,reverse;fg=green> {$this->argument('model')} Created </> 🤙\n");
        $view = Str::kebab(Str::plural(trim($this->argument('model'))));
        $this->line("<options=bold,reverse;fg=green> Put Route::livewire('/{$view}', 'tall.{$view}.index')->layout('TALL::layouts.app')->name('{$view}'); into web.php file. </> 🤙\n");
    }
}
