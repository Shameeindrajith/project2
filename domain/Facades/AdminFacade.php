<?php


namespace domain\Facades;

use domain\Admin\AdminService;
use Illuminate\Support\Facades\Facade;

/**
 * Class UserFacade
 * @package domain\Facade
 */
class AdminFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
     return AdminService::class;
    }
}