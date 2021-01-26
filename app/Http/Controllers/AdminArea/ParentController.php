<?php

namespace App\Http\Controllers\AdminArea;
use App\Http\Controllers\Controller;


class ParentController extends Controller
{

     public function __construct()
    {
        $this->middleware('AdminValidate');
    }
}