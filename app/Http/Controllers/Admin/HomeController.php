<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index()
    {
    	return view(getThemeView('home.index'));
    }

    public function main()
    {
        return view(getThemeView('home.main'));
    }

    public function getmenu()
    {

        return $arr;
    }
}
