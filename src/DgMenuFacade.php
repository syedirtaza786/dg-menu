<?php

namespace Syedirtaza786\DgMenu;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Syedirtaza786\DgMenu\Skeleton\SkeletonClass
 */
class DgMenuFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dg-menu';
    }
}
