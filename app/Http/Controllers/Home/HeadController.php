<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class HeadController extends Controller
{

    public function head(Request $request)
    {
        //公司首页
        //return view('home.head.index');

    }

    public function getIndex(Request $request){
        //      dd('index');

        $company_id = session('company');
        //获取标签//公司id以后session获取
        $user = DB::table('company_tag')
            ->leftJoin('tag', 'company_tag.tag_id', '=', 'tag.id')
            ->where(['company_id'=>$company_id,'state'=>1])
            ->get();

        //标签查询
        $tag = DB::table('tag')->where('type','>',0)->get();
        //产品//公司id以后session获取
        $product = DB::table('product')->where('company_id', $company_id)->get();

        //公司详细信息
        $company = DB::table('company')->where('id', $company_id)->get();
        //历程查询
        $ser = DB::table('develop')->where(['company_id'=>$company_id])->orderBy('id', 'desc')->get();

        $team = DB::table('team')->where('company_id', $company_id)->get();
        //dd($team);
        return view('home.head/index',[
            'team'=>$team,
            'user'=>$user,
            'tag'=>$tag,
            'product'=>$product,
            'company'=>$company,
            'ser'=>$ser
        ]);
    }

    //跳转到认证申请
    public function getApply(Request $request){

        $id = $request->id;
        return view('home.head.apply',['request'=>$request]);
    }

    //申请认证
    public function postApply(Request $request){

        $id = $request->id;

        $datw = $request->except(['_token','licenes']);

        $licenes = self::upload($request,'licenes');

        $datw['licenes'] = $licenes;

        $datw['state'] = 3;

        //修改
        $res = DB::table('company')
            ->where('id', $id)
            ->update($datw);

        //判断是否成功
        if($res){

            return redirect('/head/index');
        }else{
            return back()->with('');
        }


    }

    //修改logo
    public function postLogo(Request $request){

        $id = $request->id;
        $datq = $request->except(['_token','logo']);
        $logo = self::upload($request,'logo');

        $datq['logo'] = $logo;

        //修改
        $res = DB::table('company')
            ->where('id', $id)
            ->update($datq);

        //判断是否成功
        if($res){

            return back()->with('');
        }else{
            return back()->with('');
        }
    }

    //修改公司名称
    public function postEdd(Request $request){
        $id = $request->id;
        $date = $request->except(['_token']);
        // dd($date);
        //修改数据库
        $res = DB::table('company')
            ->where('id', $id)
            ->update($date);
        // dd($res);
        //判断是否成功

        if($res){
            //如果成功,跳转回页面,给用户提示/
            // echo '成功';
            return redirect('/head/index');
        }else{
            return back()->with('');
            //echo '失败';
        }
    }

    //添加选中标签
    public function postTag(Request $request){

        //为下面判断用
        $company_id = session('company');
        $id = $request->tag_id;
        $date = $request->except(['_token']);
        $res = DB::table('company_tag')->where(['company_id'=>$company_id,'tag_id'=>$id])->first();
        //dd($res);
        // 判断是否存在
        if($res){
            return back()->with('');
        }else{
            DB::table('company_tag')->insertGetId($date);
            return redirect('/head/index');
        }

    }

    //删除标签
    public function postTtag(Request $request){
        $tag_id = $request->tag_id;

        $company_id = session('company');
        //dd($company_id);
        $res = DB::table('company_tag')->where(['company_id'=>$company_id,'tag_id'=>$tag_id])->delete();

        // dd($res);
        //判断
        if($res){

            DB::table('tag')->where(['type'=>'0','id'=>$tag_id])->delete();
            //如果成功,跳转回页面,给用户提示/
            return redirect('/head/index');
        }else{
            return back()->with('');
        }
    }


    //添加自定义标签
    public function postGgta(Request $request){

        $company_id = session('company');
        //去除token
        $da = $request->except(['_token','company_id']);
        //设置类型和状态
        $da['state'] = '1';
        $da['type'] = '0';

        //插入标签
        $da_id = DB::table('tag')->insertGetId($da);


        $xgs['company_id'] = $company_id;
        $xgs['tag_id'] = $da_id;

        if($da_id){
            DB::table('company_tag')->insertGetId($xgs);
        }

        return redirect('/head/index');

    }


    //添加产品
    public function postProduct(Request $request){

        $company_id = session('company');

        $date = $request->except(['_token','image']);
        $image = self::upload($request,'image');
        $date['image'] = $image;
        $date['addtime'] = time();

        //添加
        $ee = DB::table('product')->insertGetId($date);

        return redirect('/head/index');
    }

    //修改产品
    public function postProd(Request $request){
        $company_id = session('company');
        $id = $request->id;
        $dat = $request->except(['_token','image']);
        $image = self::upload($request,'image');
        $dat['image'] = $image;

        //修改
        $res = DB::table('product')
            ->where('id', $id)
            ->update($dat);

        //判断是否成功
        if($res){

            return redirect('/head/index');
        }else{
            return back()->with('');
        }
    }
    //删除产品
    public function getDell(Request $request){
        $id=$request->id;

        $res = DB::table('product')->where(['id'=>$id])->delete();

        return back()->with('');
    }


    //修改融资阶段
    public function postState(Request $request){
        $id = $request->id;

        $state = $request->except(['_token']);
        // dd($state);
        $res = DB::table('company')
            ->where('id', $id)
            ->update($state);

        return back()->with('');
    }

//公司介绍
    public function postDesc(Request $request){
        $id = $request->id;
        $desc = $request->except(['_token']);

        $res = DB::table('company')
            ->where('id', $id)
            ->update($desc);

        return back()->with('');
    }

//修改基本信息

    public function postInfor(Request $request){
        $id = $request->id;
        $jiben = $request->except(['_token','id']);
        $res = DB::table('company')
            ->where('id', $id)
            ->update($jiben);

        return back()->with('');
    }


//团队创始
    public function postTeams(Request $request){

        $a = $request->has('id');
        if(!$a){

            $tuandui = $request->except(['_token','image']);

            $image = self::upload($request,'image');
            $tuandui['image'] = $image;


            $team_id = DB::table('team')->insertGetId($tuandui);

            //判断是否成功
            if($team_id){

                return back()->with('');
            }else{
                return back()->with('');
            }


        }else{

            $a = $request->id;
            $tuanduii = $request->except(['_token','image','id']);

            $image = self::upload($request,'image');
            $tuanduii['image'] = $image;

            $res = DB::table('team')
                ->where('id', $a)
                ->update($tuanduii);


            //判断是否成功
            if($res){

                return back()->with('');
            }else{
                return back()->with('');
            }

        }

    }



    public function getRemove(Request $request){
        //删除团队创始人
        $shan = $request->id;
        $res = DB::table('team')->where(['id'=>$shan])->delete();
        //判断是否成功
        if($res){

            return back()->with('');
        }else{
            return back()->with('');
        }

    }

//产品历程修改
    public function postDevelop(Request $request){
        $comp = session('company');

        $a = $request->id;

        $li = $request->except(['_token','id']);

        $res = DB::table('develop')
            ->where('id', $a)
            ->update($li);


        //判断是否成功
        if($res){

            return back()->with('');
        }else{
            return back()->with('');
        }



    }

//产品历程添加
    public function postDevelo(Request $request){
        $comp = session('company');

        $li = $request->except(['_token']);
        $li['company_id'] = $comp;


        $cheng = DB::table('develop')->insertGetId($li);
        //判断是否成功
        if($cheng){

            return back()->with('');
        }else{
            return back()->with('');
        }

    }

    //删除历程
    public function getDevel(Request $request){

        $id = $request->id;
        $res = DB::table('develop')->where(['id'=>$id])->delete();
        //判断是否成功
        if($res){

            return back()->with('');
        }else{
            return back()->with('');
        }
    }



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
