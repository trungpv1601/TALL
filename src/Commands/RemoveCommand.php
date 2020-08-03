<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Trungpv1601\TALL\TALL;

class RemoveCommand extends Command
{
    public $signature = 'tall:rm {name} {--force}';

    public $description = 'Remove a TALL.';

    public function handle()
    {
        if (! $force = $this->option('force')) {
            $shouldContinue = $this->confirm(
                "<fg=yellow>Are you sure you want to delete?</>\n"
            );

            if (! $shouldContinue) {
                return;
            }
        }

        $this->removeClass($force);
        $this->removeView($force);
    }

    private function removeClass($force)
    {
        $plural = Str::plural(trim($this->argument('name')));
        $folder = ucfirst(strtolower(TALL::folder()));
        $classPath = app_path() . "/Http/Livewire/{$folder}/{$plural}";
        if (! File::exists($classPath) && ! $force) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS-IE-TOOTLES </> 😳 \n");
            $this->line("<fg=red;options=bold>Class doesn't exist:</> {$classPath}");

            return false;
        }

        File::deleteDirectory($classPath);
    }

    private function removeView($force)
    {
        $plural = Str::kebab(Str::plural(trim($this->argument('name'))));
        $folder = strtolower(TALL::folder());
        $viewsPath = base_path() . "/resources/views/livewire/{$folder}/{$plural}";
        if (! File::exists($viewsPath) && ! $force) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS-IE-TOOTLES </> 😳 \n");
            $this->line("<fg=red;options=bold>Class doesn't exist:</> {$viewsPath}");

            return false;
        }

        File::deleteDirectory($viewsPath);
    }
}
