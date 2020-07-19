<?php

namespace Trungpv1601\TALL\Commands;

class ViewCommand extends BaseTALLCommand
{
    public $name = 'tall:view';

    public $description = 'Make TALL View interface for model.';

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
