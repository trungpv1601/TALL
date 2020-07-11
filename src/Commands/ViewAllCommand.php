<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Trungpv1601\TALL\TALL;

class ViewAllCommand extends GeneratorCommand
{
    public $name = 'tall:view-all';

    public $description = 'Make TALL View All interface for model.';

    protected function getStub()
    {
        return __DIR__ . '/Stubs/Livewire/Models.stub';
    }

    protected function getViewStub()
    {
        return file_get_contents(__DIR__ . '/../../stubs/models.stub');
    }

    protected function getViewLivewire()
    {
        $plural = Str::plural(strtolower(trim($this->argument('name'))));
        $folder = strtolower(TALL::folder());

        if (! is_dir($livewireViewPath = resource_path("views/livewire/{$folder}"))) {
            (new Filesystem)->makeDirectory($livewireViewPath);
        }

        return $livewireViewPath . "/{$plural}.blade.php";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        $folder = ucfirst(strtolower(TALL::folder()));

        return $rootNamespace . "\\Http\\Livewire\\{$folder}\\";
    }

    protected function replaceNamespace(&$stub, $name)
    {
        $subFolder = strtolower(TALL::folder());
        $subNamespace = ucfirst($subFolder);
        $namespace = Str::plural(trim($this->argument('name')));
        $view = strtolower(Str::plural(trim($this->argument('name'))));
        $modelObject = strtolower(trim($this->argument('name')));

        $stub = str_replace(
            [
                '[class]',
                '[view]',
                '[model]',
                '[sub_namespace]',
                '[sub_folder]',
            ],
            [
                $namespace,
                $view,
                Str::singular(trim($this->argument('name'))),
                $subNamespace,
                $subFolder,
            ],
            $stub
        );

        $stubView = str_replace(
            [
                '[namespace]',
                '[view]',
                '[model]',
                '[modelObject]',
                '[sub_folder]',
            ],
            [
                $namespace,
                $view,
                Str::singular(trim($this->argument('name'))),
                Str::singular($modelObject),
                $subFolder,
            ],
            $this->getViewStub()
        );

        // Make livewire view
        file_put_contents($this->getViewLivewire(), $stubView);

        return $this;
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return Str::plural(trim($this->argument('name')));
    }
}
