<?php

namespace Trungpv1601\TALL\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Trungpv1601\TALL\TALL;

class BaseTALLCommand extends GeneratorCommand
{
    protected function getStub()
    {
        $name = $this->getNameInput();

        return __DIR__ . "/Stubs/Livewire/Models/{$name}.stub";
    }

    protected function getViewStub()
    {
        $name = lcfirst($this->getNameInput());

        return file_get_contents(__DIR__ . "/../../stubs/models/{$name}.stub");
    }

    protected function getViewLivewire()
    {
        $plural = Str::plural(strtolower(trim($this->argument('name'))));
        $folder = strtolower(TALL::folder());
        $name = strtolower($this->getNameInput());

        if (! is_dir($livewireViewPath = resource_path("views/livewire/{$folder}/{$plural}"))) {
            (new Filesystem)->makeDirectory($livewireViewPath);
        }

        return "{$livewireViewPath}/{$name}.blade.php";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        $plural = Str::plural(trim($this->argument('name')));
        $folder = ucfirst(strtolower(TALL::folder()));

        return $rootNamespace . "\\Http\\Livewire\\{$folder}\\" . $plural;
    }

    protected function replaceNamespace(&$stub, $name)
    {
        $subFolder = strtolower(TALL::folder());
        $subNamespace = ucfirst($subFolder);
        $namespace = Str::plural(trim($this->argument('name')));
        $view = strtolower(Str::plural(trim($this->argument('name'))));
        $model = trim($this->argument('name'));
        $modelObject = strtolower(trim($this->argument('name')));

        $stub = str_replace(
            [
                '[namespace]',
                '[view]',
                '[model]',
                '[modelObject]',
                '[sub_namespace]',
                '[sub_folder]',
            ],
            [
                $namespace,
                $view,
                Str::singular($model),
                Str::singular($modelObject),
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
                Str::singular($model),
                Str::singular($modelObject),
                $subFolder,
            ],
            $this->getViewStub()
        );

        // Make livewire view
        file_put_contents($this->getViewLivewire(), $stubView);

        return $this;
    }
}
