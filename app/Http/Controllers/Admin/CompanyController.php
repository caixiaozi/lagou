<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    //
    public function company(Request $request)
    {/*
         $company =DB::table('company')->paginate(5);
         return view('admin.company.index')->with('company',$company);*/


         $res = \DB::table('company')->orderBy('id', 'desc') -> where(function($query)use($request){

            $query->where('short_name','like','%'.$request->input('keywords').'%');

        })->paginate($request->input('num',2));
         //dd($res);

        return view('admin.company.index',['res' => $res,'request' => $request]);

    }


    public function companyAdd()
    {
        //显示模板
        return view('admin.company.add');

    }


   public function companyInsert(Request $request)
    {
       // dd($request->all());
        $data = $request->only('name','web');
        $data['short_name'] = $data['name'];
        $data['tel'] = '18888888888';
        $data['email'] = '1655399007@qq.com';
        $data['licenes'] = ' ';
        $data['logo'] = ' ';
        $data['city'] = '上海';
        $data['desc'] = ' ';
        $data['one_desc'] = '五险一金';
        $data['trade'] = ' ';
        $data['state'] = '4';

        $res = DB::table('company')->insert($data);
        // dd($res);
        if($res){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/company/index')->with('success','数据添加成功');
        }else{
            //失败 回到添加页
            return back()->with('error','数据插入失败');
        }
    }

    public function companyEdit($id)
    {
        // 查询数据
        $res = DB::table('company')->where('id',$id)->first();

        //显示模板分配变量
        //dd($res);
        return view('admin.company.edit',['res'=>$res]);
    }

    //公司数据修改
    public function companyUpdate(Request $request)
    {
        //接收数据
        $data = $request->only(['state']);
        $id = $request->input('id');
        //dd($date);
        //执行修改
        $res = DB::table('company')->where('id',$id)->update($data);
       // dd($res);
        if($res){
        //成功 重定向 页面跳转到列表页
        return redirect('admin/company/index')->with('success','数据修改成功');
        }else{
        //失败 回到修改页
        return back()->with('error','数据修改失败');
        }
    }

    //删除公司数据
    public function companyDelete($id)
    {
        //执行删除
        $company = DB::table('company')->where('id',$id)->delete();
        //dd($company);
        //判断
        if($company){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/company/index')->with('success','数据删除成功');
        }else{
            //失败 回到首页
            return back()->with('error','数据删除失败');
        }
    }

    //申请公司信息
    public function companyApply(Request $request)
    {
        $res = \DB::table('company')->where('state','3')->paginate($request->input('num',10));
         //dd($res);

        return view('admin.company.apply',['res' => $res,'request' => $request]);
    }

    public function companyAgree($id)
    {
        //dd($id);
        $res = DB::table('company')->where('id',$id)->update(['state'=> 1]);
           //dd($res);
            if($res){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/company/apply')->with('success','数据修改成功');
            }else{
            //失败 回到修改页
            return back()->with('error','数据修改失败');
            }
    }





}
