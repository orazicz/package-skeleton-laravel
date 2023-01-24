<?php

namespace Orazicz\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Orazicz\Skeleton\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Orazicz\Skeleton\Skeleton::class;
    }
}
