<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
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


}
