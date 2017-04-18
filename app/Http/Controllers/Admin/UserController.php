<?php

namespace App\Http\Controllers\Admin;
use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //用户列表
    public function userList()
    {
//        return view('admin.admin.userlist');
        $users = User::all();
        foreach ($users as $user) {
            $roles = array();
            foreach ($user->roles as $role) {
                $roles[] = $role->display_name;
            }
            $user->roles= implode(',', $roles);
        }
        return view('admin.admin.userlist', compact('users'));
    }
    //添加用户
    public function userAdd(Request $request)
    {
        if ($request->isMethod('post')) {
            User::create(array_merge($request->all(),['avatar'=>'image/default.jpg']));
            return redirect('admin/user-list');
        }
        return view('admin.admin.userAdd');
    }

    //分配角色
    public function attachRole(Request $request,$user_id)
    {
        if ($request->isMethod('post')) {
            //获取当前用户的角色
            $user = User::find($user_id);
            DB::table('role_user')->where('user_id', $user_id)->delete();
            foreach ($request->input('role_id') as $role_id){
                $user->attachRole(Role::find($role_id));
            }
            return redirect('admin/user-list');
        }
        //查询所有的权限
        $roles = Role::all();
        return view('admin.admin.attachRole', compact('roles'));
    }

    //删除权限
    public function userDelete($user_id)
    {
        //删除信息
        $user= DB::table('users')->where('id',$user_id)->delete();
//        Role::destroy([$role_id]);
//        dd ($role_id);
        if($user){
            return redirect('admin/user-list');
        }else{
            return back();
        }
    }


}
