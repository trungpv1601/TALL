<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class CreateCommand extends GeneratorCommand
{
    public $name = 'tall-crud:create';

    public $description = 'Make TALL CRUD Create interface for model.';

    protected function getStub()
    {
        return __DIR__ . '/Stubs/Livewire/Models/Create.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        $plural = Str::plural(trim($this->argument('name')));

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
                Str::plural(trim($this->argument('name'))),
                strtolower(Str::plural(trim($this->argument('name')))),
                trim($this->argument('name')),
                strtolower(trim($this->argument('name'))),
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
        return 'Create';
    }
}
