<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class ViewAllCommand extends GeneratorCommand
{
    public $name = 'tall:view-all';

    public $description = 'Make TALL View All interface for model.';

    protected function getStub()
    {
        return __DIR__ . '/Stubs/Livewire/Models.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Livewire';
    }

    protected function replaceNamespace(&$stub, $name)
    {
        $stub = str_replace(
            [
                '[class]',
                '[view]',
                '[model]',
            ],
            [
                trim($this->argument('name')),
                strtolower(trim($this->argument('name'))),
                Str::singular(trim($this->argument('name'))),
            ],
            $stub
        );

        return $this;
    }
}
