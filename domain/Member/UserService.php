<?php

namespace domain\Member;
use App\Models\User;

class UserService
{
    protected $user;


    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
     $this->user = new User();
    }

    /**
     * getUserbyEmail
     *
     * @param  mixed $email
     * @return void
     */
    public function getUserbyEmail($email)
    {
     return $this->user->where('email', $email)->first();
    }
}