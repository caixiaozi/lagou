<?php

namespace App\Http\Controllers\Home;
use Hash;
use Mail;
use App\Http\Requests;
use App\Model\Vip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    public function register()
    {
        //显示模板
        return view('home.login.register');
    }

    public function doregister(Request $request)
    {         //提取数据进行处理

        $view = 'home.email.welecome';
        $data = $request->only('name', 'email', 'password', 'type');
        $data['password'] = md5($data['password']);
        $data['_token'] = str_random(12);
        $email = $request->input('email');
        //dd($data);
        if (DB::table('vip')->where('email', $request->input('email'))->first()) {
            echo "<script>alert('邮箱已存在');top.location='register';</script> ";
        } else {
            //执行数据插入
            $id = DB::table('vip')->insertGetId($data);
            if ($id) {
                //注册成功 发送激活邮件
                //发送邮件
                $this->sendMail($email, $view, '标题',$data);
                //显示成功页面
                return view('home.login.emailvalidation');
            } else {
                echo "<script>alert('未知错误,请联系管理员');top.location='home/login/register';</script> ";
            }
        }
    }

    public function sendMail($user,$view,$subject,$data)
    {
        Mail::send($view, $data, function ($message) use ($user,$subject) {
            $message->to($user)->subject($subject);
        });
}

    public function jihuo($id)
    {
          $vip = DB::table('vip')->where('_token',$id)->first();
//        //接收id
//        $id = $request->input('id');
//        //查询数据库
//        $vip = DB::table('vip')->where('id',$id)->first();
//        //判断
        if ($vip) {
            //激活用户
            $res = DB::table('vip')->where('_token',$id)->update(['status'=>2]);
            if ($res) {
//                echo "激活成功";
                echo "<script>alert('激活成功');</script> ";
                return redirect('/');
            }else{
                echo "激活失败";
                return view('home/register');
            }
        }else{
            echo "非法请求";
        }
    }
    }

