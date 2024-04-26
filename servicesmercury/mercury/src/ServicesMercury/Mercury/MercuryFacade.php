<?php
namespace ServicesMercury\Mercury;
/**
 * This file is part of EasyNav,
 * Easy navigation tools for Laravel.
 *
 * @license MIT
 * @package EasyNav
 */

use Illuminate\Support\Facades\Facade;

class MercuryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mercury';
    }
}
