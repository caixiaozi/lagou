<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        //前台个人主页
        //dd('index');
        //return view('home/index');
        $result = DB::table('carousels')->orderBy('id')->where('cate', 0)->where('onsale', 1)->get();
        $result2 = DB::table('carousels')->orderBy('id')->where('cate', 1)->where('onsale', 1)->get();

        $ad = DB::table('ad') ->orderBy('id' ,'desc') -> limit('6') -> get();
        //dd($ad);
        $links = DB::table('links') -> orderBy('id','desc') -> get();
        //dd($links);
        $data['links'] = $links;

        $cate = DB::table('category') -> get();
        $str = DB::table('category') -> where('pid',0)-> get();
        $job = DB::table('job') -> orderBy('id','desc') -> limit('15') -> where('state', '1')-> get();
        //dd($job);
        $company = DB::table('company')  -> get();
        //dd($company);
        $data['job'] = $job;
        //dd($data['job']);
        //dd($cate);
        // dd($company);
        foreach($data['job'] as $k => $v)
        {
            foreach($company as $val)
            {
                if($val -> id == $v -> company_id)
                {
                    //dd($val);
                    $data['job'][$k] -> com_name = $val -> short_name;
                    $data['job'][$k] -> com_trade = $val -> trade;
                    $data['job'][$k] -> com_stage = $val -> stage;
                    $data['job'][$k] -> com_id = $val -> id;


                }
                //$data['job']['company']
            }
            if(empty($data['job'][$k] -> com_name) )
            {
                $data['job'][$k] -> com_name = 'Change';
            }
            if(empty($data['job'][$k] -> com_trade))
            {
                $data['job'][$k] -> com_trade = '软件技术';
            }
            if(empty($data['job'][$k] -> com_stage))
            {
                $data['job'][$k] -> com_stage ='1';
            }
            if(empty($data['job'][$k] -> com_id))
            {
                $data['job'][$k] -> com_id =1;
            }
        }
        //dd($job);
        //dd($data);
        //dd($cate);
        foreach($str as $v)
        {

            foreach($cate as $val)
            {
                if($val -> pid == $v -> id)
                {

                    // $data[] = $val -> name;

                    foreach($cate as $key => $value)
                    {
                        if($value -> pid == $val -> id)
                        {
                            $data['category'][$v->name][$val->name][] = $value -> name;
                        }
                    }
                }
            }
        }
        foreach($data['category'] as $k => $v)
        {
            foreach($v as $val)
            {
                foreach($val as $key => $value)
                {
                    if($key == 0){
                        // dd($v -> name);
                        $res[$k][] = $value;
                    }

                }
            }
        }
        //dd($res);
        //dd($data);


        return view('home.index',[
            'data'=>$data,
            'res' => $res,
            'ad' => $ad,
            'arr1'=>$result,
            'arr2'=>$result2
        ]);

    }

     public function retrievepassword()
    {
        return view('home.login.retrievepassword');
    }



}
