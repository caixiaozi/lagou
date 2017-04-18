<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class IndexController extends Controller
{
    //首页的内容
    public function index()
    {
        return view('admin.index');
    }
    //显示登录视图
    public function showLogin()
    {
    	return view('admin.login');
    }

    //完成登录的处理
    public function doLogin(Request $request)
    {
//        dd($request->all());
//       //定义验证规则
        $rules = array(
            'name' => 'required',
            'password' => 'required',
        );
        $message = array(
            'name.required' => '用户名不能为空',
            'password.required' => '密码不能为空',

        );
        $this->validate($request, $rules, $message);
        //获取表单提交的数据
        $name = $request->input('name');
        $password = $request->input('password');
        //原生的sql语句
        $link = mysqli_connect('localhost', 'root', '');

        //选择数据库
        mysqli_select_db($link, 'lag');
        //设置字符集
        mysqli_set_charset($link, 'utf8');
        //准备sql和执行sql
        $sql = "select * from  users where  name = '{$name}' and password='{$password}'";
//        dd($sql);
        $res = mysqli_query($link, $sql);
        $user = mysqli_fetch_assoc($res);
        if ($user) {
            session(['user' => $user]);
            return redirect('admin/index');

        } else {
            return back();
        }
        // var_dump($user);
        // dump($res);
//        return '登录';
    }

    //注销
    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }

}
