<?php

namespace domain\Member;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
     * getUserData
     *
     * @return void
     */
    public function getUserData()
    {
     return $this->user->get();
    }

    /**
     * getUserDataById
     *
     * @param  mixed $id
     * @return void
     */
    public function getUserDataById($id)
    {
     return $this->user->find($id);
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

    /**
     * validateEmail
     *
     * @param  mixed $email
     * @param  mixed $edit
     * @param  mixed $filters
     * @return void
     */
    public function validateEmail($email, $edit, $filters = [])
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $found = $this->user->where("email", $email);
            if ($edit) {
                $found->where('id', '!=', $edit);
            }
            if ($found->first()) {
                return ['status' => 0, "msg" => "This Email is already Used."];
            } else {
                return ['status' => 1, "msg" => "Valid Email"];
            }
        } else {
            return ['status' => 0, "msg" => "Invalid Email"];
        }
    }

    /**
     * updateUserData
     *
     * @param  mixed $user
     * @param  mixed $data
     * @return void
     */
    public function updateUserData(User $user, $data)
    {
     return $user->update($this->edit($user, $data));
    }

    protected function edit(User $user, $data)
    {
     return array_merge($user->toArray(), $data);
    }
}