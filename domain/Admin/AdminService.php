<?php

namespace domain\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminService
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
     * getUserData
     *
     * @return void
     */
    public function getUserData()
    {
     return $this->user->get();   
    }
        
    /**
     * store
     *
     * @param  mixed $data
     * @return void
     */
    public function store($data)
    {
         return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}