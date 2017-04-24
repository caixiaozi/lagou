<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{

    public function allcompany(Request $request) {
        //查询所有公司
        //dd('index');
        $res = DB::table('audit_companys')
            ->leftJoin('companys', 'audit_companys.vip_id', '=', 'companys.vip_id')
            ->leftJoin('vip', 'audit_companys.vip_id', '=', 'vip.id')
            ->where(function($query)use($request){
                $query->where('web','like','%'.$request->input('keywords').'%');

            })->paginate($request->input('num',10));

            //->get();
        //dd($coms);
        return view('admin.company.index',['res' => $res,'request' => $request]);
        //return view('admin/company/index')->with('res', $res);
    }



    //修改公司审核
    public function auditedt(Request $request) {
        if($request->status == 'icon-ok') {
            DB::table('audit_companys')->where('vip_id', '=', $request->id)->update(['audit'=>0]);
            return 0;
        }else{

            DB::table('audit_companys')->where('vip_id', '=', $request->id)->update(['audit'=>1]);
            return 1;
        }

    }

    //显示未审核公司
    public function refcompany(Request $request) {
        //查询所有公司
             $res = DB::table('audit_companys')
            ->leftJoin('companys', 'audit_companys.vip_id', '=', 'companys.vip_id')
            ->leftJoin('vip', 'audit_companys.vip_id', '=', 'vip.id')
            ->where('audit_companys.audit', '=', '0')
            ->where(function($query)use($request){
                $query->where('web','like','%'.$request->input('keywords').'%');

            })->paginate($request->input('num',10));

              return view('admin.company.index',['res' => $res,'request' => $request]);

    }

    //显示已审核公司
    public function passcompany(Request $request) {
        //查询所有公司
        $res = DB::table('audit_companys')
            ->leftJoin('companys', 'audit_companys.vip_id', '=', 'companys.vip_id')
            ->leftJoin('vip', 'audit_companys.vip_id', '=', 'vip.id')
            ->where('audit_companys.audit', '=', '1')
            ->where(function($query)use($request){
                $query->where('web','like','%'.$request->input('keywords').'%');

            })->paginate($request->input('num',10));

        return view('admin.company.index',['res' => $res,'request' => $request]);
    }




}
