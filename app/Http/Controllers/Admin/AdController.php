<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class AdController extends Controller
{
    //
    public function ad(Request $request)
    {
        /*$ad =DB::table('ad')->paginate(8);
        return view('admin.ad.index')->with('ad',$ad);*/
        $res = \DB::table('ad')->where(function($query)use($request){

            $query->where('url','like','%'.$request->input('keywords').'%');

        })->paginate($request->input('num',10));
         //dd($res);

        return view('admin.ad.index',['res' => $res,'request' => $request]);
    }

    public function adAdd()
    {
        return view('admin.ad.add');
    }

    public function adInsert(Request $request)
    {
        $data = $request->only('url','des','state','spic');
        $logo = self::upload($request,'pic');

        //$zhuce['logo'] = $logo;
        $data['pic'] = $logo;
        //dd($zhuce);
        // dd($data);
        $data['create_time'] = time();
        //$data['state'] = 0;
        //执行数据插入
        //dd($data);
        $res = DB::table('ad')->insert($data);
        if($res){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/ad/index')->with('success','数据添加成功');
        }else{
            //失败 回到添加页
            return back()->with('error','数据插入失败');
        }
    }

    public function adEdit($id)
    {
        // 查询数据
        $ad = DB::table('ad')->where('id',$id)->first();
        //显示模板分配变量
        //dd($ad);
        return view('admin.ad.edit',['ad'=>$ad]);
    }

    public function adUpdate(Request $request)
    {
        //接收数据
        $date = $request->only(['state','url','spic']);
        $id = $request->input('id');
        $logo = self::upload($request,'pic');

        //$zhuce['logo'] = $logo;
        $date['pic'] = $logo;
        //dd($date);
        //执行修改
        $ad = DB::table('ad')->where('id',$id)->update($date);
        // dd($res);
        if($ad){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/ad/index')->with('success','数据修改成功');
        }else{
            //失败 回到修改页
            return back()->with('error','数据修改失败');
        }
    }
    //封装图片上传类
    public static function upload(Request $request,$file){
        if($request->hasFile($file)){
            //获取文件上传后缀名
            $suffix = $request->file($file)->getClientOriginalExtension();
            //图片存储
            $fileName = md5(time().rand(1,9999)).'.'.$suffix;
            $request->file($file)->move('public/home/Uploads',$fileName);
            //返回图片地址
            $img = '/public/home/Uploads/'.$fileName;
            return $img;
        }
    }


    public function adDelete($id)
    {
        //执行删除
        $ad = DB::table('ad')->where('id',$id)->delete();
        //判断
        if($ad){
            //成功 重定向 页面跳转到列表页
            return redirect('admin/ad/index')->with('success','数据删除成功');
        }else{
            //失败 回到首页
            return back()->with('error','数据删除失败');
        }
    }

}
