<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    //显示用户信息列表
    public function user()
    {

<<<<<<< HEAD
        $users =DB::table('users')->paginate(5);
//        dd($users);
        return view('admin.user.user')->with('users',$users);
    }
=======
        $users =DB::table('users')->paginate(10);
//        dd($users);
        return view('admin.user.user')->with('users',$users);
    }

    //删除用户
    public function userDelete($id)
    {
        //获取用户模型
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user');
    }

    //显示修改的表单
    public function showUpdate($id)
    {
        //dd($id);
        //根据id获取单个模型
        $user = User::find($id);
        return view('admin.user.update', compact('user'));
    }

    //修改用户的数据
    public function doUpdate(Request $request, $id)
    {
//        dd($request->all());
        //获取当前用户的实例
        $user = User::find($id);
        $user->name = $request->input('name', '');
        $user->email = $request->input('email', '');
        $user->status = $request->input('status', '');
        $user->password = $request->input('password', '');

        $result = $user->save();
        //判断是否修改成功
        if ($result) {
            return redirect('admin/user');
        } else {
            return back();
        }
    }

    public function showAdd()
    {
        return view('admin.user.add');
    }
    //添加用户
    public function userAdd(Request $request)
    {
//        dd($request->all());
//        return "添加成功";
        $result = $request->all();
        $result['created_at'] = date("Y-m-d H:i:s");
        //执行数据插入
        $res = DB::table('users')->insert($result);
        if($res){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/user');
        }else{
            //失败 回到添加页
            return back();
        }
    }
>>>>>>> 8b6225fb2776ae8486b67e766e73ca63cf4ec475
}
