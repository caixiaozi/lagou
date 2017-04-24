<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

use App\Http\Requests;
class LoginController extends Controller
{
    //登录页面
    public function login()
    {
        return view('home.login.login');
    }
    //执行登录
    public function doLogin(Request $request)
    {

      $vip = DB::table('vip')->where(['email' => $request->input('email'),'password' => $request->input('password'),'status' => 2]);
        //检测密码是否一致
        if (true) {
            if ($vip) {
                if (true) {
                    //登录成功将用户存入session

                    //判断用户类型/个人/企业
                    $vip = DB::table('vip')->where('email', $request->input('email'))->first();
                    $type = $vip->type;
                    if ($type == 1) {
                        session(['vip' => $vip]);
                        return redirect('/');
                    }
                    if ($type == 2) {
                        return view('home.CompanyShow.index ');
                    }
                } else {
                    return view('home/login');
                }
            } else {
                return view('home/login');
            }
        }
    }

    public function getLogout()
    {
        session(['vip' => null]);
        // dd(session('user'));
        echo "<script>alert('退出成功');</script> ";
        return redirect('/');
    }
}
