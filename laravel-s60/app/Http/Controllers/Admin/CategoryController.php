<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;


class CategoryController extends Controller
{
    public function categoryPid($pid)
    {
        $res = DB::table('category')->where('id',$pid)->get();
    }
    //显示分类列表
    public function category()
    {
        $res = DB::table('category')
            ->select(DB::raw('id,name,pid,path,concat(path,"_",id) as paths'))
            ->orderBy('paths')
            ->get();
        //层级关系设置
        //dd($res);
        foreach ($res as $k => $v) {
            $tmp = explode('_',$v->path);
            $len = count($tmp)-1;
            //修改分类的名称
            $res[$k]->name = str_repeat('|---',$len).$v->name;
        }

        //dd($res);
        return $res;
    }
    //添加分类
    public function categoryAdd()
    {
        //查询所有分类
        // $res = DB::table('cates')->get();
        $res = $this->category();
        //显示模板
        // dd($res);
        return view('admin.category.add',['res'=>$res]);
    }

     //分类数据的添加
    public function categoryInsert(Request $request)
    {
        // dd($request->all());
        $data = $request->only('name','pid');

        //拼接数据
        $pid = $request->input('pid');

        if ($pid == 0) {
            $data['path'] = 0;
        }else{
            $info = DB::table('category')->where('id',$pid)->first();
            $data['path'] = $info->path.'_'.$info->id;
        }

        //执行数据插入
        //dd($data);
        $res = DB::table('category')->insert($data);
        if($res){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/category/index')->with('success','数据添加成功');
        }else{
            //失败 回到添加页
            return back()->with('error','数据插入失败');
        }
    }

    //分类列表页
    public function categoryIndex()
    {
        //查询数据 显示模板
        $res =  $this->category();
        //显示模板
        // dd($cates);
        return view('admin.category.index',['res'=>$res]);
        //return view('admin.jobCate.our');
    }

    public function categoryEdit($id)
    {
        //查询所有的类
        $res = $this->category();
        //查询当前要修改的类
        $sort = DB::table('category')->where('id',$id)->first();
        //显示模板 分配变量
        return view('admin.category.edit',['sort'=>$sort,'res'=>$res]);
    }

    public function categoryUpdate(Request $request)
    {
        //dd($request -> all());
        $data = $request->only(['name','path']);
        $id = $request->input('id');
        $pid = $request->input('pid');

        //根据sorid查询原数据
        $info = DB::table('category')->where('id',$id)->first();
        //判断
        if($info->pid != $pid){
            //要修改分类 就要查询 如果还有子分类 就不能修改
            $res = DB::table('category')->where('pid',$id)->count();
            if($res > 0){
                //有子类 不能修改
                return back()->with('error','该分类下有子类,不允许修改分类');
            }
        }
        //拼接路径
        if($pid == 0){
            $data['path'] = 0;
        }else{
            $info = DB::table('category')->where('id',$pid)->first();
            $data['path'] = $info->path.'_'.$info->id;
        }

        //可以修改
        $res = DB::table('category')->where('id',$id)->update($data);
        //dd($res);
        //判断
        if($res){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/category/index')->with('success','数据修改成功');
        }else{
            //失败 回到列表页
            return back()->with('error','数据修改失败');
        }

    }

    public function categoryDelete($id)
    {
        //判断是否有子类

        $data = DB::table('category')->where('pid',$id)->count();
        if($data > 0 )
        {
            return back()->with('error','该分类下有子类,不允许删除');
        }else{
            $res = DB::table('category')->where('id',$id)->delete();
        }
        if($res){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/category/index')->with('success','数据删除成功');
        }else{
            //失败 回到列表页
            return back()->with('error','数据删除失败');
        }
    }

    public function categoryOur()
    {
        return view ('admin.category.our');
    }



}

