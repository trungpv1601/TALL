<?php

namespace Trungpv1601\TALL\Commands;

class IndexCommand extends BaseTALLCommand
{
    public $name = 'tall:index';

    public $description = 'Make TALL Index interface for model.';

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return 'Index';
    }
}
