<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function company()
    {
        //前台个人主页
        //dd('index');
        return view('home.company.index');
    }

}
