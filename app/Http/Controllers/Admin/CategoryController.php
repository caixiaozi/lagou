<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //显示职位分类列表信息
    public function category()
    {
        $category = DB::table('category')->paginate(10);
//        dd($category);
        return view('admin.category.category')->with('category',$category);
    }
    //添加
    public function showAdd()
    {
        return view('admin.category.categoryAdd');
    }

    //添加顶级分类
    public function categoryAdd(Request $request)
    {

        $result = $request->all();
        $res = DB::table('category')->insert($result);
        if($res){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/category-list');
        }else{
            //失败 回到添加页
            return view('admin/categoryAdd');
        }
    }
    //删除顶级分类
    public function del($id)
    {
        $category = Category::find($id);
        $category->delete();
        $data = DB::table('category')->where('pid',$id)->pluck('id')->toArray();
        Category::destroy($data);
        return back();
    }

    //修改顶级分类
    public function update($id)
    {
        $category = DB::table('vip')->where('id',$id)->first();
        return view('admin.category.categoryUpdate')->with('category',$category);
    }
}
