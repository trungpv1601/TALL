<?php

namespace Trungpv1601\TALL\Commands;

class DeleteCommand extends BaseTALLCommand
{
    public $name = 'tall:delete';

    public $description = 'Make TALL Delete interface for model.';

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return 'Delete';
    }
}
