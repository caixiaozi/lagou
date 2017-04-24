<?php

namespace App\Http\Controllers\home;
use session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MyresumeController extends Controller
{
    public function myresume(Request $request)
    {

        $id = session('vip')->id;

        $res_resume = DB::table('resume')->where('uid', $id)->first();
//        dd($res_resume);
        if (!$res_resume) {

            $data['username'] = ' ';
            $data['image'] = '';
            $data['sex'] = ' ';
            $data['education'] = ' ';
            $data['work_year'] = ' ';
            $data['school'] = ' ';
            $data['professional'] = ' ';
            $data['city'] = ' ';
            $data['phone'] = ' ';
            $data['email'] = ' ';
            $data['now_state'] = ' ';
            $data['modifty_time'] = ' ';
            $data['introduction'] = ' ';

        } else {
            $data['username'] = $res_resume->name;
            $data['image'] = $res_resume->image;
            $data['sex'] = $res_resume->sex;
            $data['education'] = $res_resume->education;
            $data['work_year'] = $res_resume->work_year;
            $data['school'] = $res_resume->school;
            $data['professional'] = $res_resume->professional;
            $data['city'] = $res_resume->city;
            $data['phone'] = $res_resume->phone;
            $data['email'] = $res_resume->email;
            $data['now_state'] = $res_resume->now_state;
            $data['modifty_time'] = $res_resume->modifty_time;
            $data['introduction'] = $res_resume->introduction;

            //工作经历
            $res_his = DB::table('history')->where('rid', $id)->get();
            $res_history = DB::table('history')->where('rid', $id)->first();
            if ($res_his) {
                $data['res_his'] = $res_his;
            } else {
                $data['res_his'] = 'en';
            }

            if ($res_history) {
                $data['history_work_first'] = '';
                $data['history_work_second'] = 'dn';
                $data['history_work_third'] = 'dn';
                $data['history_value'] = $res_history;
            } else {
                $data['history_work_second'] = 'dn';
            }

            //期望工作
            $res_hopejob = DB::table('hopejob')->where('rid', $id)->first();

            if ($res_hopejob) {
                $data['hope'] = $res_hopejob;
            } else {
                $data['hope'] = 'dn';
            }

            //项目经验
            $res_project = DB::table('project')->where('rid', $id)->get();
            if ($res_project) {
                $data['project_first'] = '';
                $data['project_second'] = '';
                $data['project_third'] = 'dn';
                $data['project'] = 'dn';
                $data['pro'] = $res_project;
            } else {
                $data['project'] = 'en';
            }

            //判断用户是否有教育经历
            $res_education = DB::table('education')->where('rid', $id)->get();
            //dd($res_eduction);
            if ($res_education) {

                $data['education_first'] = '';
                $data['education_second'] = 'dn';
                $data['education_third'] = '';
                $data['edu'] = $res_education;
                //用于显示添加
            } else {
                $data['edu'] = 'en';
            }

            //判断用户是否有过自我介绍
            if ($res_resume->introduction != '') {
                $data['intr'] = $res_resume->introduction;
                $data['introduction_first'] = '';//用于显示自我介绍
                $data['introduction_second'] = 'dn';//用于隐藏添加
                $data['introduction_third'] = '';//用于显示修改
            } else {
                $data['intr'] = 'en';
            }

            //判断用户是否有作品
            // $show=M('show_works');
            $res_show = DB::table('show_works')->where('rid', $id)->get();
            // $res_show=$show->where("rid='{$id}'")->select();
            if ($res_show) {
                $data['show_works_value'] = $res_show;
                $data['show_works_first'] = 'dn';//用于隐藏添加栏
                $data['show_works_second'] = '';//用于显示作品
                $data['show_works_third'] = '';//用于添加作品
            } else {
                $data['show_works_value'] = 'en';
            }
//            dd($data);
            return view('home.myresume.index',['data'=>$data]);
        }
    }

    public function addmyresume()
    {

        return view('home.myresume.add');
    }



//    //个人基本信息修改
    public function postUserupdate(Request $request)
{
    $data =  $request->only(['email','name','sex','education','work_year','phone','now_state']);
    $img = self::upload($request,'image');
    $history = DB::table('resume');
    $res = $history ->where('id',session('vip') -> id)-> update($data,$img);

    if ($res) {
        echo "<script>alert('编辑成功');</script> ";
        return redirect('myresume');

    }else{
        echo "<script>alert('编辑失败');</script> ";
        return redirect('myresume');
    }
}


    /**
     * 期望工作
     */

    public function postResumeshow(Request $request)
    {
        $res = $request -> all();
        $data = $request -> only(['city','nature', 'job','salary']);
        $his_id = DB::table('hopejob')->where('rid',session('vip')->id) ->first();
        if(!$his_id)
        {
            $data['rid'] = session('vip') ->id;
            $res = DB::table('hopejob')->insert($data);
            if($res)
            {
                echo "<script>alert('添加成功');</script>";
                return redirect('myresume');
            }else{
                echo "<script>alert('添加失败');</script>";
                return redirect('myresume');
            }
        }else{
            $res = DB::table('hopejob')->where('rid',session('vip')->id)->update($data);
            // dd($res);
            if($res)
            {
                echo "<script>alert('更改成功');</script>";
                return redirect('myresume');
            }else{
                echo "<script>alert('更改失败');</script>";
                return redirect('myresume');
            }
        }

    }

    //处理工作经历
    public function anyHisajax(Request $request)
    {
        $res = $request -> all();
         dd($res);
        $history_id= $res['history_id'];
//dd($history_id);
        $data['company'] = $res['companyName'];
        $data['job'] = $res['positionName'];
        $data['begin_yeartime'] = $res['companyYearStart'];
        $data['begin_monthtime'] = $res['companyMonthStart'];
        $data['end_yeartime'] = $res['companyYearEnd'];
        $data['end_monthtime'] = $res['companyMonthEnd'];
        $history = DB::table('history');
        if(!empty($res['history_id']))
        {

            $res = $history ->where('id',$res['history_id'])-> update($data);
            if($res){
                $check = 1;
                echo "<script>alert('修改成功');</script> ";
                return redirect('myresume');

            }else{
                echo "<script>alert('修改失败');</script> ";
                return redirect('myresume');
            }
        }else{
            $data['rid'] = session('vip') -> id;
            $res = $history->where('id',$res['history_id']) ->insert($data);
            if($res){
                $check = 1;
                echo "<script>alert('添加成功');</script> ";
                return redirect('myresume');
            }else{
                echo "<script>alert('添加失败');</script> ";
                return redirect('myresume');
            }
        }

    }

    //删除工作经历
    public function getDelhistoryajax($id)
    {
        $reshistory= DB::table('history')->where('id',$id)->delete();
        if($reshistory){
            echo "<script>alert('删除成功');</script> ";
            return redirect('myresume');
        }else{
            echo "<script>alert('删除失败');</script> ";
            return redirect('myresume');
        }
    }



    /**
     * 项目经验
     */

    public function anyProject(Request $request)
    {
        $res = $request -> all();
        //dd($res);
        $history_id= $res['project_id'];
        //$rid = session('id');
        //dd($rid);
        $data = $request -> only(['name','job','begin_yeartime','begin_monthtime','end_yeartime','end_monthtime','desc']);
        if(!empty($res['project_id'])){
            $res = DB::table('project')->where('id',$history_id)->update($data);
            // dd($res);
            if($res)
            {
                echo "<script>alert('修改成功');</script> ";
                return redirect('myresume');
            }else{
                echo "<script>alert('修改失败');</script> ";
                return redirect('myresume');
            }
        }else{

            // dd($res);
            $data['rid'] = session('vip') ->id;
            $res = DB::table('project')->insert($data);
            if($res)
            {
                echo "<script>alert('添加成功');</script>";
                return redirect('myresume');
            }else{
                echo "<script>alert('添加失败');</script> ";
                return redirect('myresume');
            }
        }
    }

    //删除项目经验
    public function getProdel($id)
    {
//        return "111";

        $res = DB::table('project')->where('id', $id)-> delete();
//        dd($res);
        if($res)
        {
            echo "<script>alert('删除成功');</script>";
            return redirect('myresume');
        }else{
            echo "<script>alert('删除失败');</script> ";
            return redirect('myresume');
        }


    }

    /**
     * 教育背景
     */
    public function anyEdu(Request $request)
    {
        $res = $request -> all();
        $history_id= $res['edu_id'];

        $data = $request -> only(['school','education','professional','begin_time','end_time']);
        $edu_id = DB::table('education')->where('rid',session('vip')->id);

            if(!$edu_id)
            {
                $data['rid'] = session('vip') ->id;
                $res = DB::table('education')->insert($data);
                if($res)
                {
                    echo "<script>alert('添加成功');</script>";
                    return redirect('myresume');
                }else{
                    echo "<script>alert('添加失败');</script>";
                    return redirect('myresume');
                }
            }else{
                $res = DB::table('education')->where('rid',session('vip')->id)->update($data);
                if($res)
                {
                    echo "<script>alert('修改成功');</script>";
                    return redirect('myresume');
                }else{
                    echo "<script>alert('修改失败');</script>";
                    return redirect('myresume');
                }
            }
    }

    //修改自我描述
    public function anyIntro(Request $request)
    {
        // dd($request->all());
        // $id = $request->id;
        $id = session('vip') -> id;
        // dd($id);
        $data['introduction'] = $request['introduction'];
        // dd($data);
        $res = DB::table('resume')->where('id',$id)->update($data);
        if ($res) {
            echo "<script>alert('修改成功');</script>";
            return redirect('myresume');

        }else{
            echo "<script>alert('修改失败');</script>";
            return redirect('myresume');
        }
    }
/* 作品*/
    public function anyWorks(Request $request)
    {
        $res = $request -> all();
        $id= $res['show_id'];
        $data = $request -> only(['link','desc']);
        if(!empty($res['show_id'])){
            $res = DB::table('show_works')->where('id',$id)->update($data);
            if($res)
            {
                echo "<script>alert('修改成功');</script>";
                return redirect('myresume');
            }else{
                echo "<script>alert('修改失败');</script>";
                return redirect('myresume');
            }
        }else{
            $data['rid'] = session('vip') -> id;
            $res = DB::table('show_works')-> insert($data);
            if($res)
            {
                echo "<script>alert('添加成功');</script>";
                return redirect('myresume');
            }else{
                echo "<script>alert('添加失败');</script>";
                return redirect('myresume');
            }
        }
    }

    //删除作品展示
    public function getWorkdel($id)
    {
        //dd($request -> all());
        $res = DB::table('show_works')->where('id', $id)-> delete();
        //dd($res);
        if($res)
        {
            echo "<script>alert('删除成功');</script>";
            return redirect('myresume');
        }else{
            echo "<script>alert('删除失败');</script>";
            return redirect('myresume');
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
}
