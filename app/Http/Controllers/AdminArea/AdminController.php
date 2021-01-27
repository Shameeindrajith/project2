<?php

namespace App\Http\Controllers\AdminArea;

use App\Http\Requests\checkOutAddUser;
use domain\Facades\AdminFacade;
use domain\Facades\UserFacade;
use Illuminate\Http\Request;

class AdminController extends ParentController
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
     return view('adminArea.pages.admin');
    }
    
    /**
     * showUsers
     *
     * @return void
     */
    public function showUsers()
    {
        $response['users']=UserFacade::getUserData();
        return view('adminArea.pages.showUser')->with($response);
    }
    
    /**
     * addUsers
     *
     * @return void
     */
    public function addUsers()
    {
        return view('adminArea.pages.addUser');
    }
    
    /**
     * saveUsers
     *
     * @param  mixed $request
     * @return void
     */
    public function saveUsers(checkOutAddUser $request)
    {
       UserFacade::store($request->all());
       return redirect(route('admin-show-user'));
    }
}