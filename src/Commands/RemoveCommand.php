<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\Command;
use Livewire\Commands\ComponentParser;

class RemoveCommand extends Command
{
    public $signature = 'tall:rm {model}';

    public $description = 'Remove a TALL.';



    public function handle()
    {
        $parser = new ComponentParser(
            config('livewire.class_namespace', 'App\\Http\\Livewire'),
            config('livewire.view_path', resource_path('views/livewire')),
            $this->argument('name')
        );
    }
}
