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

    /**
     * validateEmail
     *
     * @param  mixed $request
     * @return void
     */
    public function validateEmail(Request $request)
    {
      return UserFacade::validateEmail(
            $request->email ? $request->email : "",
            $request->edit ? $request->edit : false
        );
    }

    /**
     * updateUser
     *
     * @param  mixed $id
     * @return void
     */
    public function updateUser($id)
    {
      $update=UserFacade::getUserDataById($id);
      return view('adminArea.pages.userUpdate')->with('update_user_data',$update);
    }

    /**
     * updateUserData
     *
     * @param  mixed $request
     * @return void
     */
    public function updateUserData(Request $request)
    {
      $data=UserFacade::getUserDataById($request->id);
      UserFacade::updateUserData($data, $request->all());
      return redirect(route('admin-show-user'));
    }

    /**
     * deleteUser
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteUser($id)
    {
     $delete=UserFacade::getUserDataById($id);
     $delete->delete();
     return redirect()->back();
    }
}