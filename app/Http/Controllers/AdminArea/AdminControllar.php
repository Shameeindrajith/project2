<?php

namespace App\Http\Controllers\AdminArea;



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