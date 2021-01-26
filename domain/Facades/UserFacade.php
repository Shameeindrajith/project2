<?php


namespace domain\Facades;
use domain\Member\UserService;
use Illuminate\Support\Facades\Facade;

/**
 * Class UserFacade
 * @package domain\Facade
 */
class UserFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
     return UserService::class;
    }
}