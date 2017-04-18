<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Vip;
use Illuminate\Support\Facades\Validator;

class VipController extends Controller
{
    //显示用户信息列表
    public function viplist()
    {
        $vip = DB::table('vip')->paginate(10);
        return view('admin.vip.vip')->with('vip',$vip);
    }

    public function showAdd()
    {
        return view('admin.vip.vipAdd');
    }
    //添加用户
    public function vipadd(Request $request)
    {
        $result = $request->all();
        $result['created_at'] = date("Y-m-d H:i:s");
//        执行数据插入
        $res = DB::table('vip')->insert($result);
        if($res){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/vip');
        }else{
            //失败 回到添加页
            return back();
        }
    }

    //删除用户
    public function vipDelete($id)
    {
        //获取用户模型
       $vip= DB::table('vip')->where('id',$id)->delete();
        if($vip){
            return redirect('admin/vip');
        }else{
            return back();
        }
    }

    //显示修改的表单
    public function showUpdate($id)
    {
        //dd($id);
        //根据id获取单个模型
        $vip = DB::table('vip')->where('id',$id)->first();
        return view('admin.vip.vipUpdate')->with('vip',$vip);
    }

    //修改用户的数据
    public function doUpdate(Request $request)
    {


    }
}
