<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;

class PermissionController extends Controller
{
    //显示权限列表
    public function permissionList()
    {
        //查询所有的权限
        $permissions = Permission::all();

        return view('admin.permission.permissionList',compact('permissions'));


    }
    //添加权限表单
    public function permissionAdd(Request $request)
    {
//        dd($request->all());

        if ($request->isMethod('post')) {
            //添加权限操作
            $permission = Permission::create($request->all());
            return redirect('admin/permission');
        }
        return view('admin.permission.permissionAdd');
    }

    //修改权限
    public function permissionUpdate(Request $request, $permission_id)
    {
//        dd($request->all());
        //修改用户信息
        if ($request->isMethod('post')) {
        $permission = Permission::findOrFail($permission_id);
        $permission->update($request->all());
        return redirect('admin/permission');
    }
        //查询出当前的权限信息
        $permission = Permission::findOrFail($permission_id);
        return view('admin.permission.permissionUpdate', compact('permission'));
    }

    //删除权限
    public function permissionDelete($permission_id)
    {
        //删除信息
        Permission::destroy([$permission_id]);
        return redirect('admin/permission');
    }
}
