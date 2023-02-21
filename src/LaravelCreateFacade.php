<?php

namespace Venturedrake\LaravelCreate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Venturedrake\LaravelCreate\Skeleton\SkeletonClass
 */
class LaravelCreateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-create';
    }
}
