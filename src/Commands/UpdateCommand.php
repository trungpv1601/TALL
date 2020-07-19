<?php

namespace Trungpv1601\TALL\Commands;

class UpdateCommand extends BaseTALLCommand
{
    public $name = 'tall:update';

    public $description = 'Make TALL Update interface for model.';

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return 'Update';
    }
}
