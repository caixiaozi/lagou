<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Session;
class PersonalController extends Controller
{

    public function personal(Request $request)
    {
        $id = session('vip')->id;
        // dd($id);
        $com = DB::table('vip')->where('id', $id)->first();
//         dd($com);
        return view('home.personal.personal', ['com' => $com]);

    }

    //处理个人信息
    public function postMessage(Request $request)
    {
        $hq = $request->all();
//        dd($hq);
        $id = session('vip')->id;
        // dd($id);
        $data['name'] = $hq['name'];
        $data['sex'] = $hq['sex'];
        $res = DB::table('vip')->where('id', $id)->update($data);
        if ($res) {
            echo "<script>alert('修改成功');top.location='personal';</script> ";
        } else {
            echo "<script>alert('修改失败');top.location='personal';</script> ";
        }
    }

    //修改密码
    public function postUpdate(Request $request)
    {
        $old = md5($request->input('oldpassword'));
        $new = md5($request->input('newpassword'));
        $name = $request->input('name');

        $id = session('vip')->id;
        $data['name'] = $name;
        $data['oldpassword'] = $old;
        $data['newpassword'] = $new;

        $res = DB::table('vip')->where('id', $id)->first();
        if ($data['name'] == $res->email) {
            $da['password'] = $new;
            $up = DB::table('vip')->where('id', $id)->update($da);
            if ($up) {
                echo "<script>alert('修改成功');top.location='personal';</script> ";
            } else {
                echo "<script>alert('未知错误');top.location='personal';</script> ";
            }
        }else{
            echo "<script>alert('错误信息');top.location='personal';</script> ";

        }
    }
}





