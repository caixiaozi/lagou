<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
<<<<<<< HEAD
    public function company()
    {
        //前台个人主页
        //dd('index');
        //return view('home.company.index');

    }
    //公司详情填写
    public function getIndex(Request $request){

        $id = $request->id;

=======
   /* //公司详情填写
    public function getIndex(Request $request){

        $id = $request->id;
        //dd($id);
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63
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
<<<<<<< HEAD
        dd($zhuce);
=======
        //dd($zhuce);
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63

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

<<<<<<< HEAD
    public function getInsert(Request $request){

        $company_id = $request->id;
        //获取标签//公司id以后session获取
=======
   public function Info(Request $request){
        $company_id = $request->id;
        dd($company_id);
        //获取标签 公司id以后session获取
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63
        $user = DB::table('company_tag')
            ->leftJoin('tag', 'company_tag.tag_id', '=', 'tag.id')
            ->where(['company_id'=>$company_id,'state'=>1])
            ->get();
<<<<<<< HEAD

=======
        //dd($user);
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63
        //产品//公司id以后session获取
        $prod = DB::table('product')->where('company_id', $company_id)->get();
        //历程查询
        $ser = DB::table('develop')->where(['company_id'=>$company_id])->orderBy('id', 'desc')->get();
        //公司详细信息
        $comp = DB::table('company')->where('id', $company_id)->get();
<<<<<<< HEAD
        //招聘职位
        $use = DB::table('job')->where(['state'=>1,'company_id'=>$company_id])->get();
        $team = DB::table('team')->where('company_id', $company_id)->get();
        //dd($comp);
        return view('home.head.insert',[
=======
        //dd($comp);
        //招聘职位
        $use = DB::table('job')->where(['state'=>1,'company_id'=>$company_id])->get();
        $team = DB::table('team')->where('company_id', $company_id)->get();
        //dd($team);
        return view('home.company.infor',[
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63
            'team'=>$team,
            'user'=>$user,
            'prod'=>$prod,
            'comp'=>$comp,
            'ser'=>$ser,
            'use'=>$use
        ]);
    }
<<<<<<< HEAD

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
=======
*/


    //跳转公司信息页面
    public function company() {
        //获取公司信息
       // dd('index');
        $infos = DB::table('companys')
            ->leftJoin('audit_companys', 'companys.vip_id', '=', 'audit_companys.vip_id')
            ->where('companys.vip_id', '=', session()->get('vip')->id)
            ->first();
      //dd($infos);
        if ($infos) {
            return view('home/company/company')->with('info', $infos);
        } else {
            return view('home/company/index');
        }

>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63
    }

    //上传公司信息
    public function uploadCom(Request $request) {

        $type = $request->logo->getClientOriginalExtension();
        $imgName = time().mt_rand('0','10000').'.'.$type;

        $result = $request->logo->move('comImage', $imgName);

        $result = DB::table('companys')->insert([
            'name'=>$request->name,
            'logo'=>'/comImage/'.$imgName,
            'web'=>$request->website,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->city,
            'type'=>$request->select_industry_hidden,
            'desc'=>$request->temptation,
            'scale'=>$request->select_scale_hidden,
            'stationCount'=>'0',
            'vip_id'=>$request->session()->get('vip')->id,
        ]);
//        return $result;
        if($result) {
            //将该公司添加到审核表中
            DB::table('audit_companys')->insert([
                'vip_id'=>$request->session()->get('vip')->id,
            ]);
            return "公司信息添加成功，等待审核";
        } else {
            return "公司信息添加失败";
        }

    }




    //跳转修改公司信息页面
    public function companyEdt(Request $request) {
//        dd($request->session()->get('user')->users_id);
        $company = DB::table('companys')
            ->where('vip_id', '=', $request->session()->get('vip')->id)
            ->first();
//        dd($company);
        $str = DB::table('trade') -> get();
        //dd($str);

        //return view('home.company.index',['trade'=>$str]);
        return view('home/company/edit')->with('info', $company);
    }

    //修改公司信息
    public function doEdt(Request $request) {
        $userid = $request->session()->get('vip')->id;
        /**/
        $type = $request->logo->getClientOriginalExtension();
        $imgName = time().mt_rand('0','10000').'.'.$type;

        //判断是否上传了图片
        $path = DB::table('companys')
            ->select('logo')
            ->where('vip_id', '=', $userid)
            ->first();
        if(!$request->hasFile('logo')) {
            $relpath = $path->logo;
        } else {
            unlink(public_path($path->logo));
            $request->logo->move('comImage', $imgName);
            $relpath = '/comImage/'.$imgName;
        }
        $result = DB::table('companys')->where('vip_id', '=', $userid)
            ->update([
                'name'=>$request->name,
                'logo'=>$relpath,
                'web'=>$request->website,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address'=>$request->city,
                'type'=>$request->select_industry_hidden,
                'desc'=>$request->temptation,
                'scale'=>$request->select_scale_hidden,
            ]);
        if($result) {
            return "公司信息修改成功";
        } else {
            return "公司信息修改失败";
        }
    }

    //审核公司资格
    public function audit () {
        set_time_limit(0);
        ob_start();
        $pad = str_repeat(' ', 4000);
        ob_flush();
        flush();
        while(true) {
            $audit = DB::table('audit_companys')
                ->where('audit', '=', '0')
                ->get()->toArray();
            if($audit) {
                echo 1;
            }else{
                echo 2;
            }
            ob_flush();
            flush();
            sleep(1);
        }
    }

    //求职者查看公司详情
    public function seeCompany($uid, $id) {
        $coms = DB::table('cominfos')->where('users_id', '=', $uid)->first();
//        dd($id);
        return view('Home.index04')->with('coms', $coms)->with('id',$id);
    }



/*
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
    }*/


}
