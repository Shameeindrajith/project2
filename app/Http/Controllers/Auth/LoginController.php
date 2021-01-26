<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use domain\Facades\UserFacade;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * login
     *
     * @param  mixed $request
     * @return void
     */
    public function login(Request $request)
    {
     $user = UserFacade::getUserbyEmail($request->email);
     if ($user) 
     {
            if ($user->deleted_at == null) 
            {
                if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'user_role' => 2])) {

                    return redirect()->intended(route('member-dashboard'));
                } elseif (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'user_role' => 1])) {
                    return redirect()->intended(route('admin-dashboard'));
                }   else {
                    return redirect()->back()->withInput()->with('error_data', 'userdata');
                }
            } else {
                return redirect()->back()->withInput()->with('user_data', 'userdisable');
            }
    } else {
            return redirect()->back()->withInput()->with('error_data', 'userdata');
        }
    }
}