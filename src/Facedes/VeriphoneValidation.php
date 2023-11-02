<?php

namespace Slvler\VeriphoneValidation\Facedes;

use Illuminate\Support\Facades\Facade;

class VeriphoneValidation extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Slvler\VeriphoneValidation\Contracts\VeriphoneContract::class;
    }
}
