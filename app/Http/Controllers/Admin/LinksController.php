<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{
    //
    public function links(Request $request)
    {
        $res = \DB::table('links')->where(function($query)use($request){

            $query->where('name','like','%'.$request->input('keywords').'%');

        })->paginate($request->input('num',10));


        return view('admin.links.index',['res' => $res,'request' => $request]);

    }

    public function linksAdd()
    {
        return view('admin.links.add');
    }

    public function linksInsert(Request $request)
    {

        $data = $request->only('name','url');
        $data['create_time'] = time();
        $data['state'] = 0;
        //执行数据插入

        $links = DB::table('links')->insert($data);
        if($links){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/links/index')->with('success','数据添加成功');
        }else{
            //失败 回到添加页
            return back()->with('error','数据插入失败');
        }
    }

    public function linksEdit($id)
    {
        // // 查询数据
        $links = DB::table('links')->where('id',$id)->first();

        // //显示模板分配变量

        return view('admin.links.edit',['links'=>$links]);
    }

    //修改友情链接
    public function linksUpdate(Request $request)
    {
       //接收数据
        $data = $request->only(['state','name','url']);
        $data['create_time'] = time();
        $id = $request->input('id');
        //执行修改
        $links = DB::table('links')->where('id',$id)->update($data);

        if($links){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/links/index')->with('success','数据修改成功');
        }else{
            //失败 回到修改页
            return back()->with('error','数据修改失败');
        }
    }

    //用户数据的删除 删除数据库
    public function linksDelete($id)
    {
        //调试中

        //执行删除
        $links = DB::table('links')->where('id',$id)->delete();
        //判断
        if($links){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/links/index')->with('success','数据删除成功');
        }else{
            //失败 回到首页
            return back()->with('error','数据删除失败');
        }
    }


}
