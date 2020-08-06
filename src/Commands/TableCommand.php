<?php

namespace Trungpv1601\TALL\Commands;

class TableCommand extends BaseTALLCommand
{
    public $name = 'tall:table';

    public $description = 'Make TALL Table interface for model.';

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return 'Table';
    }
}
