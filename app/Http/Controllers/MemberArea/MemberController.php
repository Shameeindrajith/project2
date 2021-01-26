<?php

namespace App\Http\Controllers\MemberArea;

use App\Http\Controllers\Controller;

class MemberController extends ParentController
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('memberArea.pages.member');
    }
}