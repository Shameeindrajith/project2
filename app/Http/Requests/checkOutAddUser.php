<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkOutAddUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //checkout user registration validation
        return [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'string',
                'min:8', // must be at least 8 characters in length
                'regex:/[A-Za-z]/', // must contain at least one letter
                'regex:/[0-9]/', // must contain at least one digit

            ],
            'repassword' => [
                'required',
                'string',
                'min:8', // must be at least 8 characters in length
                'regex:/[A-Za-z]/', // must contain at least one letter
                'regex:/[0-9]/', // must contain at least one digit

            ],
        ];
    }
}