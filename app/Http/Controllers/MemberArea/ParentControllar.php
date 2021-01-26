<?php

namespace App\Http\Controllers\MemberArea;

use App\Http\Controllers\Controller;


class ParentControllar extends Controller
{

     public function __construct()
    {
        $this->middleware('MemberValidate');
    }
}