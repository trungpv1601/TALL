<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class ViewCommand extends GeneratorCommand
{
    public $name = 'tall-crud:view';

    public $description = 'Make TALL CRUD View interface for model.';

    protected function getStub()
    {
        return __DIR__ . '/Stubs/Livewire/Models/View.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        $plural = Str::plural($this->argument('name'));

        return $rootNamespace . '\\Http\\Livewire\\' . $plural;
    }

    protected function replaceNamespace(&$stub, $name)
    {
        $stub = str_replace(
            [
                '[namespace]',
                '[view]',
                '[model]',
                '[modelObject]',
            ],
            [
                Str::plural($this->argument('name')),
                strtolower(Str::plural($this->argument('name'))),
                $this->argument('name'),
                strtolower($this->argument('name')),
            ],
            $stub
        );

        return $this;
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return 'View';
    }
}