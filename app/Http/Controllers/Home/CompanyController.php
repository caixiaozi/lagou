<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function company()
    {
        //前台个人主页
        //dd('index');
        //return view('home.company.index');

    }
    //公司详情填写
    public function getIndex(Request $request){

        $id = $request->id;

        //查询数据库,有就直接,没有就往下走,
        $use = DB::table('company')->where('id', $id)->first();
        //dd($use);
        if(!empty($use)){

            $id = $use->id;

            session(['company' => $id]);

            return redirect('/head/index');
        }

        $str = DB::table('trade') -> get();
        //dd($str);

        return view('home.company.index',['trade'=>$str]);
    }


    public function postZhuce(Request $request){


        $zhuce = $request->except(['_token']);

        $zhuce = $request->except(['_token','logo']);
        $logo = self::upload($request,'logo');

        $zhuce['logo'] = $logo;
        $zhuce['state'] = '2';
        $zhuce['licenes'] = 'dd';
        $zhuce['desc'] = 'dd';
        dd($zhuce);

        // $id = DB::table('company')->insertGetId($zhuce);
        $res = DB::table('company')->insert($zhuce);

        $com = $res->id;
        session(['company' => $com]);

        //判断是否成功
        if($res){

            return redirect('/head/index');
        }else{
            return back()->with('');
        }

    }

    public function getInsert(Request $request){

        $company_id = $request->id;
        //获取标签//公司id以后session获取
        $user = DB::table('company_tag')
            ->leftJoin('tag', 'company_tag.tag_id', '=', 'tag.id')
            ->where(['company_id'=>$company_id,'state'=>1])
            ->get();

        //产品//公司id以后session获取
        $prod = DB::table('product')->where('company_id', $company_id)->get();
        //历程查询
        $ser = DB::table('develop')->where(['company_id'=>$company_id])->orderBy('id', 'desc')->get();
        //公司详细信息
        $comp = DB::table('company')->where('id', $company_id)->get();
        //招聘职位
        $use = DB::table('job')->where(['state'=>1,'company_id'=>$company_id])->get();
        $team = DB::table('team')->where('company_id', $company_id)->get();
        //dd($comp);
        return view('home.head.insert',[
            'team'=>$team,
            'user'=>$user,
            'prod'=>$prod,
            'comp'=>$comp,
            'ser'=>$ser,
            'use'=>$use
        ]);
    }

    //封装图片上传
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

}
