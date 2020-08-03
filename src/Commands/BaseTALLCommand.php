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
        $plural = Str::kebab($this->getPluralName());
        $folder = strtolower(TALL::folder());
        $name = strtolower($this->getNameInput());

        if (! is_dir($livewireViewPath = resource_path("views/livewire/{$folder}/{$plural}"))) {
            (new Filesystem)->makeDirectory($livewireViewPath);
        }

        return "{$livewireViewPath}/{$name}.blade.php";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        $plural = $this->getPluralName();
        $folder = ucfirst(strtolower(TALL::folder()));

        return $rootNamespace . "\\Http\\Livewire\\{$folder}\\" . $plural;
    }

    private function getPluralName()
    {
        return Str::plural(trim($this->argument('name')));
    }

    protected function replaceNamespace(&$stub, $name)
    {
        $plural = $this->getPluralName();
        $subFolder = strtolower(TALL::folder());
        $subNamespace = ucfirst($subFolder);
        $namespace = $plural;
        $view = strtolower(Str::kebab($plural));
        $model = trim($this->argument('name'));
        $modelObject = strtolower(trim($this->argument('name')));

        $stub = str_replace(
            [
                '[namespace]',
                '[view]',
                '[model]',
                '[modelObjects]',
                '[modelObject]',
                '[sub_namespace]',
                '[sub_folder]',
            ],
            [
                $namespace,
                $view,
                Str::singular($model),
                Str::plural($modelObject),
                Str::singular($modelObject),
                $subNamespace,
                $subFolder,
            ],
            $stub
        );
        $stubView = str_replace(
            [
                '[title]',
                '[namespace]',
                '[view]',
                '[model_title]',
                '[model]',
                '[modelObjects]',
                '[modelObject]',
                '[sub_folder]',
            ],
            [
                Str::of($namespace)->snake()->replace('_', ' ')->title(),
                $namespace,
                $view,
                Str::of(Str::singular($model))->snake()->replace('_', ' ')->title(),
                Str::singular($model),
                Str::plural($modelObject),
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
