<?php

namespace Trungpv1601\TALL;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Trungpv1601\TALL\TALL
 */
class TALLFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'TALL';
    }
}
