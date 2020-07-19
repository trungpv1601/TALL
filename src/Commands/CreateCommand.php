<?php

namespace Trungpv1601\TALL\Commands;

class CreateCommand extends BaseTALLCommand
{
    public $name = 'tall:create';

    public $description = 'Make TALL Create interface for model.';

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
