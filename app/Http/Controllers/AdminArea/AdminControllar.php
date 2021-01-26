<?php

namespace App\Http\Controllers\AdminArea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminControllar extends ParentController
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
}