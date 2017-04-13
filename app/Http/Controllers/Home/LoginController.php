<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登录页面
    public function login()
    {
        return view('home.login.login');
    }

//    //找回密码
//    public function  retrievepassword()
//    {
//        return view('home.retrievepassword');
//    }

}
