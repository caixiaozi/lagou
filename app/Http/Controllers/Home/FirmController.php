<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FirmController extends Controller
{
    //
    /*public function firm()
    {
        return view('home.firm.edit');
<<<<<<< HEAD
=======
    }*/
    //企业版/发布新职位
    public function getRecruit(){
        //return view('home.firm.recruit');

        //类型邮箱
        //显示模板
        $cate = DB::table('category') -> get();
        //dd($cate);
        $str = DB::table('category') -> where('pid',0)-> get();
// dd($str);
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
                            $data['cate'][$v->name][$val->name][] = $value -> name;
                        }
                    }
                }
            }
        }
       //dd($data);
        return view('home.firm.recruit',['data' => $data]);
    }

    //有效职位/后期添加where条件,公司id
    public function getJob(){
       // return view('home.firm.job');
        $company = session('company');
        //查询有效职位
        $user = DB::table('job')->where(['state'=>1,'company_id'=>$company])->orderBy('id', 'desc')->get();
        //dd($user);
        return view('home.firm.job',['user'=>$user]);
    }

    //已下线职位
    public function getLine(){
        //return view('home.firm.offline');
        $company = session('company');
        //dd($company);
        //查询下线职位
        $user = DB::table('job')->where(['state'=>0,'company_id'=>$company])->orderBy('id', 'desc')->get();
        //dd($user);
        return view('home.firm.offline',['user'=>$user]);
    }

    //添加职位
    public function postInest(Request $request){
            //return view('home.firm.browse');
        //测试,设置默认值,未完成版
        $company = session('company');
        //去除_token
        $date = $request->except(['_token','id']);
        //添加字段到date
        //后期需获取
        $date['company_id'] = $company;//公司id
        $date['state'] = '1';//状态


        $date['cate_id'] = '1';//分类id


        $date['create_time'] = time();//创建时间
        $date['modify_time'] = time();//修改时间

        //判断不为空
        foreach ($date as $k => $v) {
            if(empty($v)){
                return back()->withInput();
                dd('空');
            }

            //$date['id'] = '';
        }
        //插入数据库
        //$res = DB::table('job')->insert
        $id = DB::table('job')->insertGetId($date);
        dd($id);


        //判断是否成功
        if(!empty($id)){

            return redirect('/firm/success?id='.$id);
        }else{
            return back()->with('error','数据插入失败');
        }


    }

    //发布职位成功后的页面
    public function getSuccess(Request $request){

        $id = $request->id;
        //查询
        //$user = DB::table('job')->where('id', $id)->first();
        //dd($user->id);
        return view('home.firm.success',['request'=>$request]);
    }


    //浏览职位
    public function getBrowse(Request $request){
        //return view('home.firm.browse');
        $id = $request->id;
        //查询
        $user = DB::table('job')->where('id', $id)->first();
        //dd($user);

        return view('home.firm.browse',['user'=>$user]);
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63
    }

    //修改职位
    public function getEdit(Request $request){
       // return view('home.firm.edit');
        $id = $request->id;
        //查询
        $user = DB::table('job')->where('id', $id)->first();
        //dd($user);

        $cate = DB::table('category') -> get();
        $str = DB::table('category') -> where('pid',0)-> get();
       // dd($str);

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
                            $data['cate'][$v->name][$val->name][] = $value -> name;
                        }
                    }
                }
            }
        }
        return view('home.firm.edit',['user'=>$user,'data'=>$data]);
    }

    //重新发布
    public function postAlter(Request $request){
        $id = $request->id;

        //去除_token
        $xiu = $request->except(['_token']);
        $xiu['state'] = '1';
        //商品分类:后期合项目时获取,先给予固定值

        $xiu['cate_id'] = '1';//分类id

        //设置修改时间
        $xiu['modify_time'] = time();//修改时间
        // //修改
        $res = DB::table('job')
            ->where('id', $id)
            ->update($xiu);

        //判断是否成功
        if($res){

            return redirect('/firm/win?id='.$id);
        }else{
            return back()->with('error','数据插入失败');
        }
    }

    //职位下线
    public function getOffline(Request $request){
        $id = $request->id;
        //修改

        $res = DB::table('job')
            ->where('id', $id)
            ->update(['state'=>0]);
        //判断是否成功
        if($res){

            return redirect('/firm/job');
        }else{
            return back()->with('error','数据插入失败');
        }
    }



    //职位删除
    public function getDel(Request $request){
        $id = $request->id;
        $res = DB::table('job')->where(['id'=>$id])->delete();

        //判断是否成功
        if($res){

            return redirect('/firm/job');
        }else{
            return back()->with('error','数据插入失败');
        }
    }




}
