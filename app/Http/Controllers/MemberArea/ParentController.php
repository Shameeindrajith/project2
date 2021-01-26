<?php

namespace App\Http\Controllers\MemberArea;

use App\Http\Controllers\Controller;


class ParentController extends Controller
{

     public function __construct()
    {
        $this->middleware('MemberValidate');
    }
}